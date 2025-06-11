<?php
require_once __DIR__ . '/../includes/header.php';
?>
<main class="container">
    <div class="auth-container">
        <h1 class="auth-title">Inscription</h1>
        <?php if (isset($_SESSION['register_error'])): ?>
            <div class="auth-error"><?= htmlspecialchars($_SESSION['register_error']) ?></div>
            <?php unset($_SESSION['register_error']); ?>
        <?php endif; ?>
        <form action="/auth/register" method="POST" class="auth-form">
            <div class="form-group">
                <label for="username" class="form-label">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" class="form-input" 
                       placeholder="Votre pseudonyme" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-input" 
                       placeholder="exemple@domain.com" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-input" 
                       placeholder="••••••••" required>
            </div>
            <div class="form-group">
                <label for="password_confirm" class="form-label">Confirmer le mot de passe</label>
                <input type="password" id="password_confirm" name="password_confirm" class="form-input" 
                       placeholder="••••••••" required>
            </div>
            <button type="submit" class="auth-button">
                <span class="button-text">S'inscrire</span>
                <span class="button-icon">→</span>
            </button>
        </form>
        <div class="auth-links">
            <a href="/login" class="auth-link">Déjà inscrit ? Se connecter</a>
        </div>
    </div>
</main>
<?php
require_once __DIR__ . '/../includes/footer.php';
?>
