<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'brocante');
define('DB_USER', 'root');
define('DB_PASS', 'sql_brocante'); // Make sure this matches your MySQL root password
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATION', 'utf8mb4_unicode_ci');
define('BASE_URL', 'http://localhost:8000');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
