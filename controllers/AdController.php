<?php
require_once __DIR__ . '/../models/Ad.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/auth.php';

class AdController {
    public function createAd() {
        redirectIfNotLoggedIn();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ad = new Ad();
            $ad->title = $_POST['title'];
            $ad->description = $_POST['description'];
            $ad->price = $_POST['price'];
            $ad->user_id = $_SESSION['user_id'];
            
            // Handle file upload
            if (!empty($_FILES['photos'])) {
                $uploadDir = __DIR__ . '/../public/uploads/';
                foreach ($_FILES['photos']['tmp_name'] as $key => $tmpName) {
                    $fileName = uniqid() . '_' . basename($_FILES['photos']['name'][$key]);
                    move_uploaded_file($tmpName, $uploadDir . $fileName);
                    $ad->photos[] = $fileName;
                }
            }
            
            $ad->save();
            header('Location: /index.php');
            exit();
        }
    }
}
