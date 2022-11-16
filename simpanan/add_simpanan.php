<?php include '../template/header.php'; ?>

<a href="simpanan.php">Kembali</a>
<br /><br />

<form action="" method="post" name="form1">
  <table width="25%" border="0">
    <tr>
      <td>Nama Simpanan</td>
      <td><input type="radio" name="nm_simpanan" value="Simpanan Pokok">
        <label for="Simpanan Pokok">Simpanan Pokok</label><br>
        <input type="radio" name="nm_simpanan" value="Simpanan Wajib">
        <label for="Simpanan Wajib">Simpanan Wajib</label><br>
        <input type="radio" name="nm_simpanan" value="Simpanan Sukarela">
        <label for="Simpanan Sukarela">Simpanan Sukarela</label><br>
      </td>
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
      <td>Tanggal Simpanan</td>
      <td><input type="date" name="tgl_simpanan" value="<?php echo date("Y-m-d"); ?>" readonly></td>
    </tr>
    <tr>
      <td>Besar Simpanan</td>
      <td><input type="text" name="besar_simpanan"></td>
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
  $nm_simpanan = $_POST['nm_simpanan'];
  $id_anggota = $_POST['id_anggota'];
  $tgl_simpanan = $_POST['tgl_simpanan'];
  $besar_simpanan = $_POST['besar_simpanan'];
  $ket = $_POST['ket'];

  // include database connection file
  include_once("../config/mysql.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO simpanan(nm_simpanan,id_anggota,tgl_simpanan,besar_simpanan,ket) VALUES('$nm_simpanan','$id_anggota','$tgl_simpanan','$besar_simpanan','$ket')");

  // Show message when user added
  echo "Data Simpanan Berhasil Ditambah. <a href='http://localhost:8080/PAS/simpanan/simpanan.php'>Lihat Data</a>";
}
?>

<?php include '../template/footer.php' ?>