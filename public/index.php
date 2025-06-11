<?php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';

$db = Database::getInstance();
$ads = $db->query("
    SELECT ads.*, users.username 
    FROM ads
    JOIN users ON ads.user_id = users.id
    ORDER BY created_at DESC LIMIT 10
")->fetchAll();
?>
<main>
    <h1>Annonces récentes</h1>
    <div class="ads-grid">
        <?php foreach ($ads as $ad): ?>
        <article class="ad-card">
            <div class="ad-images">
                <?php foreach (json_decode($ad['photos']) as $photo): ?>
                <img src="uploads/<?= htmlspecialchars($photo) ?>" alt="Photo de l'annonce">
                <?php endforeach; ?>
            </div>
            <a href="ad.php?id=<?= $ad['id'] ?>">
                <h3><?= htmlspecialchars($ad['title']) ?></h3>
                <p class="price"><?= number_format($ad['price'], 2) ?> €</p>
                <p class="description"><?= htmlspecialchars($ad['description']) ?></p>
                <p class="seller">Vendeur: <?= htmlspecialchars($ad['username']) ?></p>
            </a>
        </article>
        <?php endforeach; ?>
    </div>
</main>
<?php
require_once __DIR__ . '/../includes/footer.php';
?>
