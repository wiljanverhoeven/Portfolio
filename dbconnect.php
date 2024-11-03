<?php
$servername = "localhost";
$username = "root";
$password = "banaan";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=Portfolio", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
