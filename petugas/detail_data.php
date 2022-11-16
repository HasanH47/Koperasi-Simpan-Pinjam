<?php
if (isset($_GET['id_petugas'])) {
  $id_petugas    = $_GET['id_petugas'];
} else {
  die("Error. No ID Selected!");
}
include "../config/mysql.php";
$query    = mysqli_query($mysqli, "SELECT * FROM petugas_koperasi WHERE id_petugas='$id_petugas'");
$result    = mysqli_fetch_array($query);
include '../template/header.php';
?>
<html>
<h2>Detail Data Petugas Koperasi</h2>
<p><i>Note: Dibawah ini adalah detail informasi Petugas Koperasi berdasarkan id_petugas</i> <b><?php echo $id_petugas ?></b></p>
<table border="0" cellpadding="4">
  <tr>
    <td size="90">No</td>
    <td>: <?php echo $result['id_petugas'] ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>: <?php echo $result['nama'] ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>: <?php echo $result['alamat'] ?></td>
  </tr>
  <tr>
    <td>No Telephone</td>
    <td>: <?php echo $result['no_tlp'] ?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td>: <?php echo $result['tmp_lhr'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>: <?php echo $result['tgl_lhr'] ?></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>: <?php echo $result['ket'] ?></td>
  </tr>
  <tr height="40">
    <td></td>
    <td> <a href="petugas.php">Kembali</a></td>
  </tr>
</table>
<?php include '../template/footer.php' ?>