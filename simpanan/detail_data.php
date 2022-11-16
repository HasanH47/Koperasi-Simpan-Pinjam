<?php
if (isset($_GET['id_simpanan'])) {
  $id_simpanan    = $_GET['id_simpanan'];
} else {
  die("Error. No ID Selected!");
}
include "../config/mysql.php";
$query    = mysqli_query($mysqli, "SELECT * FROM simpanan WHERE id_simpanan='$id_simpanan'");
$result    = mysqli_fetch_array($query);
include '../template/header.php';
?>
<html>
<h2>Detail Data Anggota Koperasi</h2>
<p><i>Note: Dibawah ini adalah detail informasi Anggota Koperasi berdasarkan id_simpanan</i> <b><?php echo $id_simpanan ?></b></p>
<table border="0" cellpadding="4">
  <tr>
    <td size="90">No</td>
    <td>: <?php echo $result['id_simpanan'] ?></td>
  </tr>
  <tr>
    <td>Nama Simpanan</td>
    <td>: <?php echo $result['nm_simpanan'] ?></td>
  </tr>
  <tr>
    <td>No Anggota</td>
    <td>: <?php echo $result['id_anggota'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Simpanan</td>
    <td>: <?php echo $result['tgl_simpanan'] ?></td>
  </tr>
  <tr>
    <td>Besar Simpanan</td>
    <td>: <?php echo $result['besar_simpanan'] ?></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>: <?php echo $result['ket'] ?></td>
  </tr>
  <tr height="40">
    <td></td>
    <td> <a href="simpanan.php">Kembali</a></td>
  </tr>
</table>
<?php include '../template/footer.php' ?>