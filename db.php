<?php
$host = 'your-mysql-host';  // e.g., 127.0.0.1 or your cloud IP
$db = 'test';
$user = 'your-db-username';
$pass = 'your-db-password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
