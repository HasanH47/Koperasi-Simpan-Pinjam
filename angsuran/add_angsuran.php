<?php include '../template/header.php'; ?>

<a href="angsuran.php">Kembali</a>
<br /><br />

<form action="" method="post" name="form1">
  <table width="25%" border="0">
    <tr>
      <td>No Kategori</td>
      <td><select name="id_kategori">
          <?php
          $db_host = '127.0.0.1'; // --> sever mysql
          $db_user = 'root';      // --> username
          $db_pass = '';          // --> password
          $db_name = 'koperasi';     // --> nama database

          // Fungsi untuk koneksi ke mysqli
          $koneksi = new mysqli($db_host, $db_user, $db_pass, $db_name);
          $result = mysqli_query($koneksi, "SELECT * FROM kategori_pinjaman");
          while ($data = mysqli_fetch_assoc($result)) {
          ?>
            <option value="<?php echo $data['id_kategori_pinjaman']; ?>"><?php echo $data['id_kategori_pinjaman']; ?></option><?php } ?>
        </select></td>
    </tr>
    <tr>
      <td>No Anggota</td>
      <td><select name="id_anggota">
          <?php
          $db_host = '127.0.0.1'; // --> sever mysql
          $db_user = 'root';      // --> username
          $db_pass = '';          // --> password
          $db_name = 'koperasi';     // --> nama database

          // Fungsi untuk koneksi ke mysqli
          $koneksi = new mysqli($db_host, $db_user, $db_pass, $db_name);
          $result = mysqli_query($koneksi, "SELECT * FROM anggota");
          while ($data = mysqli_fetch_assoc($result)) {
          ?>
            <option value="<?php echo $data['id_anggota']; ?>"><?php echo $data['id_anggota']; ?></option><?php } ?>
        </select></td>
    </tr>
    <tr>
      <td>Tanggal Pembayaran</td>
      <td><input type="date" name="tgl_pembayaran" value="<?php echo date("Y-m-d"); ?>" readonly></td>
    </tr>
    <tr>
      <td>Angsuran Ke</td>
      <td><input type="text" name="angsuran_ke"></td>
    </tr>
    <tr>
      <td>Besar Angsuran</td>
      <td><input type="text" name="besar_angsuran"></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><input type="text" name="ket"></td>
    </tr>
    <td></td>
    <td><input type="submit" name="Submit" value="Tambah"></td>
    </tr>
  </table>
</form>

<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
  $id_kategori = $_POST['id_kategori'];
  $id_anggota = $_POST['id_anggota'];
  $tgl_pembayaran = $_POST['tgl_pembayaran'];
  $besar_angsuran = $_POST['besar_angsuran'];
  $ket = $_POST['ket'];

  // include database connection file
  include_once("../config/mysql.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO angsuran(id_kategori,id_anggota,tgl_pembayaran,angsuran_ke,besar_angsuran,ket) VALUES('$id_kategori','$id_anggota','$tgl_pembayaran','$angsuran_ke','$besar_angsuran','$ket')");

  // Show message when user added
  echo "Data Angsuran Berhasil Ditambah. <a href='http://localhost:8080/PAS/angsuran/angsuran.php'>Lihat Data</a>";
}
?>

<?php include '../template/footer.php' ?>