<?php

include "config/mysql.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = mysqli_real_escape_string($mysqli, $_POST['name']);
  $number = mysqli_real_escape_string($mysqli, $_POST['number']);

  $query = "SELECT * FROM petugas_koperasi WHERE nama= '$name' AND no_tlp = '$number'";
  $queryDB = mysqli_query($mysqli, $query);
  $check = mysqli_num_rows($queryDB);

  if ($check > 0) {
    // ambil data users
    $getData = mysqli_fetch_array($queryDB);
    // set session 
    $_SESSION['name'] = $getData;
    $_SESSION['is_login']  = true;

    header("location: index.php");
  } else {
    echo "Nama atau Nomor yang anda masukkan salah";
  }
} else {
  return "Anda tidak di ijinkan";
}
