<?php
$host = "localhost";
$db   = "umzukhulu";
$user = "root";          // change if needed
$pass = "";              // change if needed

try {
  $pdo = new PDO(
    "mysql:host=$host;dbname=$db;charset=utf8mb4",
    $user,
    $pass,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (PDOException $e) {
  die("Database connection failed");
}
