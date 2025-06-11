<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marché de la Brocante</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/Favicon.png">
</head>
<body>
    <header>
        <nav>
            <a href="index.html"><img src="images/logo.png" alt="Logo Brocante" class="logo"></a>
            <div class="nav-links">
                <a href="index.html">Accueil</a>
                <a href="articles.html" class="active">Marché</a>
                <a href="about.html">À propos</a>
                <a href="contact.html">Contact</a>
            </div>
        </nav>
    </header>

    <main class="marketplace-container">
        <section class="publication-controls">
            <h1>Espace Marché</h1>
            <a href="create-ad.html" class="cta-button">Publier une annonce</a>
        </section>

        <div class="article-grid" id="adsContainer">
            <!-- Dynamic content loaded from JS -->
        </div>
    </main>

    <footer>
        <!-- Existing footer content -->
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>
