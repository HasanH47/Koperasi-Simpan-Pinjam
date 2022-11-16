<?php include '../template/header.php'; ?>

<a href="pinjaman.php">Kembali</a>
<br /><br />

<form action="" method="post" name="form1">
  <table width="25%" border="0">
    <tr>
      <td>Nama Pinjaman</td>
      <td><input type="text" name="nama_pinjaman"></td>
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
      <span>Rp</span>
      <td>Besar Pinjaman</td>
      <td><input type="number" name="besar_pinjaman"></td>
    </tr>
    <tr>
      <td>Tanggal Pengajuan Pinjaman</td>
      <td><input type="text" name="tgl_pengajuan_pinjaman" value="<?php echo date('d/m/Y'); ?>" readonly></td>
    </tr>
    <tr>
      <td>Tanggal Persetujuan Pinjaman</td>
      <td><input type="date" name="tgl_acc_peminjam	"></td>
    </tr>
    <tr>
      <td>Tanggal Pinjaman</td>
      <td><input type="date" name="tgl_pinjaman"></td>
    </tr>
    <tr>
      <td>Jangka Waktu Peminjaman</td>
      <td><select name="jangawak">
          <option value="">Jangka Waktu</option>
          <option value="30">1 Bulan</option>
          <option value="60">2 Bulan</option>
          <option value="90">3 Bulan</option>
        </select></td>
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
  $nama_pinjaman = $_POST['nama_pinjaman'];
  $id_anggota = $_POST['id_anggota'];
  $besar_pinjaman = $_POST['besar_pinjaman'];
  $tgl_pengajuan_pinjaman = $_POST['tgl_pengajuan_pinjaman'];
  $tgl_acc_peminjam = $_POST['tgl_acc_peminjam'];
  $tgl_pinjaman = $_POST['tgl_pinjaman'];
  $jangawak = $_POST['jangawak'];

  //iki perhitungan seko tanggal pelunasan

  date('d/m/Y', strtotime($tgl_pinjaman + $jangawak));

  // sing bagian ngisor iki kowe yo san, aku ra mudeng
  // include database connection file
  include_once("../config/mysql.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO anggota(nama,alamat,tgl_lhr,tmp_lhr,j_kel,status,no_tlp,ket) VALUES('$nama','$alamat','$tgl_lhr','$tmp_lhr','$j_kel','$status','$no_tlp','$ket')");

  // Show message when user added
  echo "Data Petugas Berhasil Ditambah. <a href='http://localhost:8080/PAS/anggota/anggota.php'>Lihat Data</a>";
}
?>

<?php include '../template/footer.php' ?>