<?php include '../template/header.php'; ?>

<a href="petugas.php">Kembali</a>
<br /><br />

<form action="" method="post" name="form1">
  <table width="25%" border="0">
    <tr>
      <td>Nama</td>
      <td><input type="text" name="nama"></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
      <td>No Telephone</td>
      <td><input type="text" name="no_tlp"></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td><input type="text" name="tmp_lhr"></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><input type="date" name="tgl_lhr"></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><input type="text" name="ket"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="Submit" value="Tambah"></td>
    </tr>
  </table>
</form>

<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_tlp = $_POST['no_tlp'];
  $tmp_lhr = $_POST['tmp_lhr'];
  $tgl_lhr = $_POST['tgl_lhr'];
  $ket = $_POST['ket'];

  // include database connection file
  include_once("../config/mysql.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO petugas_koperasi(nama,alamat,no_tlp,tmp_lhr,tgl_lhr,ket) VALUES('$nama','$alamat','$no_tlp','$tmp_lhr','$tgl_lhr','$ket')");

  // Show message when user added
  echo "Data Petugas Berhasil Ditambah. <a href='petugas.php'>Lihat Data</a>";
}
?>

<?php include '../template/footer.php' ?>