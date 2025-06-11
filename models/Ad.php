<?php
require_once __DIR__ . '/../includes/db.php';

class Ad {
    public $id;
    public $title;
    public $description;
    public $price;
    public $user_id;
    public $photos = [];
    public $created_at;

    public function save() {
        $db = Database::getInstance()->getConnection();
        
        $stmt = $db->prepare("INSERT INTO ads 
            (title, description, price, user_id, photos, created_at)
            VALUES (?, ?, ?, ?, ?, ?)");
            
        $photosJson = json_encode($this->photos);
        $stmt->execute([
            $this->title,
            $this->description,
            $this->price,
            $this->user_id,
            $photosJson,
            date('Y-m-d H:i:s')
        ]);
        
        $this->id = $db->lastInsertId();
    }
}
