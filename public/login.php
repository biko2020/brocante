<?php
require_once __DIR__ . '/../includes/header.php';
?>
<main class="container">
    <div class="auth-container">
        <h1 class="auth-title">Connexion</h1>
        <?php if (isset($_SESSION['login_error'])): ?>
            <div class="auth-error"><?= htmlspecialchars($_SESSION['login_error']) ?></div>
            <?php unset($_SESSION['login_error']); ?>
        <?php endif; ?>
        <form action="/auth/login" method="POST" class="auth-form">
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
            <button type="submit" class="auth-button">
                <span class="button-text">Se connecter</span>
                <span class="button-icon">→</span>
            </button>
        </form>
        <div class="auth-links">
            <a href="/register" class="auth-link">Créer un compte</a>
            <a href="/password-reset" class="auth-link">Mot de passe oublié ?</a>
        </div>
    </div>
</main>
<?php
require_once __DIR__ . '/../includes/footer.php';
?>
