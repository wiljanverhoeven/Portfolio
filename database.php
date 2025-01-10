<?php
$dbname = 'localhost';
$username = 'root';  
$password = 'banaan';   

try {
    // Create a new PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Throw exceptions on errors
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Fetch results as associative arrays
} catch (PDOException $e) {
    // catches errors
    die("Database connection failed: " . $e->getMessage());
}
?>
