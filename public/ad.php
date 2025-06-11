<?php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('ID d\'annonce invalide');
}

$db = Database::getInstance();
$stmt = $db->prepare("
    SELECT ads.*, users.username, users.email 
    FROM ads
    JOIN users ON ads.user_id = users.id
    WHERE ads.id = ?
");
$stmt->execute([$_GET['id']]);
$ad = $stmt->fetch();

if (!$ad) {
    die('Annonce introuvable');
}

$photos = json_decode($ad['photos']) ?: [];
?>
<main class="ad-details">
    <a href="index.php" class="back-link">← Retour aux annonces</a>
    
    <h1><?= htmlspecialchars($ad['title']) ?></h1>
    
    <div class="photo-gallery">
        <?php foreach ($photos as $photo): ?>
        <div class="photo-item">
                <img src="uploads/<?= htmlspecialchars($photo) ?>" alt="Photo de l'annonce" loading="lazy">
        </div>
        <?php endforeach; ?>
    </div>

    <div class="ad-info">
        <p class="price">Prix: <?= number_format($ad['price'], 2) ?> €</p>
        <p class="category">Catégorie: <?= htmlspecialchars($ad['category']) ?></p>
        <p class="location">Localisation: <?= htmlspecialchars($ad['location']) ?></p>
        <p class="posted-date">Publiée le: <?= date('d/m/Y H:i', strtotime($ad['created_at'])) ?></p>
    </div>

    <div class="description">
        <h2>Description</h2>
        <p><?= nl2br(htmlspecialchars($ad['description'])) ?></p>
    </div>

    <div class="seller-info">
        <h2>Vendeur</h2>
        <p>Nom: <?= htmlspecialchars($ad['username']) ?></p>
        <p>Contact: <?= htmlspecialchars($ad['email']) ?></p>
    </div>
</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
