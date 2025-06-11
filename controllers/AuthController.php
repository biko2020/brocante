<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../includes/db.php';

class AuthController {
    public function login() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
            session_regenerate_id(true);
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];

            $user = User::findByEmail($email);
            
            if ($user && password_verify($password, $user->password)) {
                $_SESSION['user_id'] = $user->id;
                $_SESSION['username'] = $user->username;
                header('Location: /index.php');
                exit();
            }
            
            $_SESSION['login_error'] = 'Identifiants incorrects';
            header('Location: /login.php');
            exit();
        }
    }

    public function register() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
            session_regenerate_id(true);
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $user->username = htmlspecialchars($_POST['username']);
            $user->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];
            $passwordConfirm = $_POST['password_confirm'];

            if ($password !== $passwordConfirm) {
                $_SESSION['register_error'] = 'Les mots de passe ne correspondent pas';
                header('Location: /register.php');
                exit();
            }

            $user->password = password_hash($password, PASSWORD_DEFAULT);
            
            try {
                $user->save();
                $_SESSION['user_id'] = $user->id;
                $_SESSION['username'] = $user->username;
                header('Location: /index.php');
                exit();
            } catch(PDOException $e) {
                $_SESSION['register_error'] = strpos($e->getMessage(), 'Duplicate entry') !== false 
                    ? 'Cet email est déjà utilisé' 
                    : 'Erreur lors de l\'inscription';
                header('Location: /register.php');
                exit();
            }
        }
    }
}
