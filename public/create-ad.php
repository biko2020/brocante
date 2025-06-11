<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../controllers/AdController.php';

$controller = new AdController();
$controller->createAd();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create New Ad</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <div class="container">
        <h1>Create New Ad</h1>
        
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="5" required></textarea>
            </div>
            
            <div class="form-group">
                <label>Price (€)</label>
                <input type="number" name="price" class="form-control" step="0.01" required>
            </div>
            
            <div class="form-group">
                <label>Photos (Max 5 images)</label>
                <input type="file" name="photos[]" multiple accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-primary">Create Ad</button>
        </form>
    </div>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
