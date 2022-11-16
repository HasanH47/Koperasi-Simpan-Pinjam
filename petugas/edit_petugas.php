<?php
// include database connection file
include_once("../config/mysql.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
  $id_petugas = $_POST['id_petugas'];

  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_tlp = $_POST['no_tlp'];
  $tmp_lhr = $_POST['tmp_lhr'];
  $tgl_lhr = $_POST['tgl_lhr'];
  $ket = $_POST['ket'];

  // update user data
  $result = mysqli_query($mysqli, "UPDATE petugas_koperasi SET nama='$nama',alamat='$alamat',no_tlp='$no_tlp',tmp_lhr='$tmp_lhr',tgl_lhr='$tgl_lhr',ket='$ket' WHERE id_petugas=$id_petugas");

  // Redirect to homepage to display updated user in list
  header("Location: http://localhost:8080/PAS/petugas/petugas.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_petugas = $_GET['id_petugas'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM petugas_koperasi WHERE id_petugas=$id_petugas");

while ($user_data = mysqli_fetch_array($result)) {
  $nama = $user_data['nama'];
  $alamat = $user_data['alamat'];
  $no_tlp = $user_data['no_tlp'];
  $tmp_lhr = $user_data['tmp_lhr'];
  $tgl_lhr = $user_data['tgl_lhr'];
  $ket = $user_data['ket'];
}
include '../template/header.php';
?>
<a href="petugas.php">Kembali</a>
<br /><br />

<form name="update_user" method="post" action="edit_petugas.php">
  <table border="0">
    <tr>
      <td>Nama</td>
      <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
    </tr>
    <tr>
      <td>No Telephone</td>
      <td><input type="text" name="no_tlp" value=<?php echo $no_tlp; ?>></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td><input type="text" name="tmp_lhr" value=<?php echo $tmp_lhr; ?>></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><input type="text" name="tgl_lhr" value=<?php echo $tgl_lhr; ?>></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><input type="text" name="ket" value=<?php echo $ket; ?>></td>
    </tr>
    <tr>
      <td><input type="hidden" name="id_petugas" value=<?php echo $_GET['id_petugas']; ?>></td>
      <td><input type="submit" name="update" value="Update"></td>
    </tr>
  </table>
</form>
<?php include '../template/footer.php'; ?>