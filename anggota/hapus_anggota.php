<?php

include("../config/mysql.php");

if (isset($_GET['id_anggota'])) {

    // ambil id dari query string
    $id_anggota = $_GET['id_anggota'];

    // buat query hapus
    $sql = "DELETE FROM anggota WHERE id_anggota=$id_anggota";
    $query = mysqli_query($mysqli, $sql);

    // apakah query hapus berhasil?
    if ($query) {
        header('Location: http://localhost:8080/PAS/anggota/anggota.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
