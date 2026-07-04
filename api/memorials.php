<?php
session_start();
require "../config/db.php";

if (!isset($_SESSION['user_id'])) {
  http_response_code(403);
  exit("Unauthorized");
}

if ($_POST['action'] === 'create') {
  $stmt = $pdo->prepare(
    "INSERT INTO memorials
     (user_id, full_name, cemetery_desc, record_date, tribute, latitude, longitude)
     VALUES (?,?,?,?,?,?,?)"
  );

  $stmt->execute([
    $_SESSION['user_id'],
    $_POST['full_name'],
    $_POST['cemetery_desc'],
    $_POST['record_date'],
    $_POST['tribute'],
    $_POST['latitude'],
    $_POST['longitude']
  ]);

  header("Location: ../public/index.php?saved=1");
}
