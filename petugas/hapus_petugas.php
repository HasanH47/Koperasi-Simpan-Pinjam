<?php

include("../config/mysql.php");

if( isset($_GET['id_petugas']) ){

    // ambil id dari query string
    $id_petugas = $_GET['id_petugas'];

    // buat query hapus
    $sql = "DELETE FROM petugas_koperasi WHERE id_petugas=$id_petugas";
    $query = mysqli_query($mysqli, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: http://localhost:8080/PAS/petugas/petugas.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
