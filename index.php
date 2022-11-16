<?php
session_start();

if (!$_SESSION["is_login"] === TRUE) {
  header("location: http://localhost:8080/PAS/login.php");
  exit;
}
include 'template/header.php';
?>

<?php include 'template/footer.php'; ?>