<?php
session_start();
require "../config/db.php";

$type = $_POST['form_type'] ?? '';

if ($type === 'signup') {
  if ($_POST['password'] !== $_POST['confirm']) {
    exit("Passwords do not match");
  }

  $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $stmt = $pdo->prepare(
    "INSERT INTO users (first_name,last_name,email,password_hash)
     VALUES (?,?,?,?)"
  );

  $stmt->execute([
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $hash
  ]);

  header("Location: ../public/index.php?login=success");
}

if ($type === 'login') {
  $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
  $stmt->execute([$_POST['email']]);
  $user = $stmt->fetch();

  if ($user && password_verify($_POST['password'], $user['password_hash'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['name'] = $user['first_name'];
    header("Location: ../public/index.php");
  } else {
    exit("Invalid login details");
  }
}

if ($type === 'logout') {
  session_destroy();
  header("Location: ../public/index.php");
}
