<?php

include("../config/mysql.php");

if (isset($_GET['id_simpanan'])) {

    // ambil id dari query string
    $id_simpanan = $_GET['id_simpanan'];

    // buat query hapus
    $sql = "DELETE FROM simpanan WHERE id_simpanan=$id_simpanan";
    $query = mysqli_query($mysqli, $sql);

    // apakah query hapus berhasil?
    if ($query) {
        header('Location: http://localhost:8080/PAS/simpanan/simpanan.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
