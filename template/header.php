<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Koperasi</title>
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover:not(.active) {
      background-color: #111;
    }

    .active {
      background-color: #04AA6D;
    }
  </style>

</head>

<body>

  <ul>
    <li><a class="active" href="http://localhost:8080/PAS/index.php">Home</a></li>
    <li><a href="http://localhost:8080/PAS/petugas/petugas.php">Petugas</a></li>
    <li><a href="http://localhost:8080/PAS/anggota/anggota.php">Anggota</a></li>
    <li><a href="http://localhost:8080/PAS/pinjaman/pinjaman.php">Pinjaman</a></li>
    <li><a href="http://localhost:8080/PAS/simpanan/simpanan.php">Simpanan</a></li>
    <li><a href="http://localhost:8080/PAS/angsuran/angsuran.php">Angsuran</a></li>
    <li style="float:right"><a href="http://localhost:8080/PAS/logout.php">Logout</a></li>
  </ul>