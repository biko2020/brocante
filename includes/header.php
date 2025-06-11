<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/auth.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brocante</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/images/Favicon.png">
</head>
<body>
<header class="site-header">
    <nav class="main-nav">
        <div class="nav-container">
            <a href="/index.php" class="brand">
                <img src="/images/logo.png" alt="Logo" class="logo">
            </a>

            <!-- Desktop Navigation -->
            <div class="nav-links desktop-nav">
                <a href="/index.php">Accueil</a>
                <a href="/articles.php">Guides</a>
                <?php if (isLoggedIn()): ?>
                    <a href="/create-ad.php">Déposer une annonce</a>
                    <a href="/logout.php">Déconnexion</a>
                <?php else: ?>
                    <a href="/login.php">Connexion</a>
                    <a href="/register.php">Inscription</a>
                <?php endif; ?>
            </div>

            <!-- Mobile Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle menu">☰</button>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-nav" id="mobileMenu">
            <a href="/index.php">Accueil</a>
            <a href="/articles.php">Guides</a>
            <?php if (isLoggedIn()): ?>
                <a href="/create-ad.php">Déposer une annonce</a>
                <a href="/logout.php">Déconnexion</a>
            <?php else: ?>
                <a href="/login.php">Connexion</a>
                <a href="/register.php">Inscription</a>
            <?php endif; ?>
        </div>
    </nav>
</header>
