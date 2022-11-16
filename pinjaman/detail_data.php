<?php
if (isset($_GET['id_pinjaman'])) {
  $id_pinjaman    = $_GET['id_pinjaman'];
} else {
  die("Error. No ID Selected!");
}
include "../config/mysql.php";
$query    = mysqli_query($mysqli, "SELECT * FROM pinjaman WHERE id_pinjaman='$id_pinjaman'");
$result    = mysqli_fetch_array($query);
include '../template/header.php';
?>
<html>
<h2>Detail Data Pinjaman Koperasi</h2>
<p><i>Note: Dibawah ini adalah detail informasi Pinjaman Koperasi berdasarkan id_pinjaman</i> <b><?php echo $id_pinjaman ?></b></p>
<table border="0" cellpadding="4">
  <tr>
    <td size="90">No</td>
    <td>: <?php echo $result['id_pinjaman'] ?></td>
  </tr>
  <tr>
    <td>Nama Pinjaman</td>
    <td>: <?php echo $result['nama_pinjaman'] ?></td>
  </tr>
  <tr>
    <td>No Anggota</td>
    <td>: <?php echo $result['id_anggota'] ?></td>
  </tr>
  <tr>
    <td>Besar Pinjaman</td>
    <td>: <?php echo $result['besar_pinjaman'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Pengajuan Pinjaman</td>
    <td>: <?php echo $result['tgl_pengajuan_pinjaman'] ?></td>
  </tr>
  <tr>
    <td>Tanggal ACC Peminjam</td>
    <td>: <?php echo $result['tgl_acc_peminjam'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Pinjaman</td>
    <td>: <?php echo $result['tgl_pinjaman'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Pelunasan</td>
    <td>: <?php echo $result['tgl_pelunasan'] ?></td>
  </tr>
  <tr>
    <td>No Angsuran</td>
    <td>: <?php echo $result['id_angsuran'] ?></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>: <?php echo $result['ket'] ?></td>
  </tr>
  <tr height="40">
    <td></td>
    <td> <a href="pinjaman.php">Kembali</a></td>
  </tr>
</table>
<?php include '../template/footer.php' ?>