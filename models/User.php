<?php
require_once __DIR__ . '/../includes/db.php';

class User {
    public $id;
    public $username;
    public $email;
    public $password;
    public $created_at;

    public static function findByEmail($email) {
        try {
            $db = Database::getInstance();
            $stmt = $db->prepare("SELECT id, username, email, password, created_at FROM users WHERE email = ?");
            $stmt->execute([strtolower(trim($email))]);
            return $stmt->fetchObject(__CLASS__);
        } catch(PDOException $e) {
            error_log("Database error in findByEmail: " . $e->getMessage());
            return false;
        }
    }

    public function save() {
        $db = Database::getInstance();
        $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        
        $cleanUsername = htmlspecialchars(trim($this->username));
        $cleanEmail = strtolower(trim($this->email));
        
        try {
            error_log("Attempting to save user:");
            error_log("Username: '$cleanUsername'");
            error_log("Email: '$cleanEmail'");
            error_log("Password: " . substr($this->password, 0, 6) . "...");

            $stmt->execute([$cleanUsername, $cleanEmail, $this->password]);
            $this->id = $db->lastInsertId();
            
            error_log("Insert successful. Last ID: {$this->id}");
            return true;
        } catch(PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            throw $e;
        }
    }
}
