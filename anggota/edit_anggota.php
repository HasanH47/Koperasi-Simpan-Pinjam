<?php
// include database connection file
include_once("../config/mysql.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
  $id_anggota = $_POST['id_anggota'];

  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $tgl_lhr = $_POST['tgl_lhr'];
  $tmp_lhr = $_POST['tmp_lhr'];
  $j_kel = $_POST['j_kel'];
  $status = $_POST['status'];
  $no_tlp = $_POST['no_tlp'];
  $ket = $_POST['ket'];

  // update user data
  $result = mysqli_query($mysqli, "UPDATE anggota SET nama='$nama',alamat='$alamat',tgl_lhr='$tgl_lhr',tmp_lhr='$tmp_lhr',j_kel='$j_kel',status='$status',no_tlp='$no_tlp',ket='$ket' WHERE id_anggota=$id_anggota
  ");

  // Redirect to homepage to display updated user in list
  header("Location: http://localhost:8080/PAS/anggota/anggota.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_anggota = $_GET['id_anggota'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM anggota WHERE id_anggota=$id_anggota");

while ($user_data = mysqli_fetch_array($result)) {
  $nama = $user_data['nama'];
  $alamat = $user_data['alamat'];
  $tgl_lhr = $user_data['tgl_lhr'];
  $tmp_lhr = $user_data['tmp_lhr'];
  $j_kel = $user_data['j_kel'];
  $status = $user_data['status'];
  $no_tlp = $user_data['no_tlp'];
  $ket = $user_data['ket'];
}
include '../template/header.php';
?>
<a href="http://localhost:8080/PAS/anggota/anggota.php">Kembali</a>
<br /><br />

<form name="update_user" method="post" action="edit_anggota.php">
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
      <td>Tanggal Lahir</td>
      <td><input type="text" name="tgl_lhr" value=<?php echo $tgl_lhr; ?>></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td><input type="text" name="tmp_lhr" value=<?php echo $tmp_lhr; ?>></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><select name="j_kel" value=<?php echo $j_kel; ?>>
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input type="text" name="status" value=<?php echo $status; ?>></td>
    </tr>
    <tr>
      <td>No Telephone</td>
      <td><input type="text" name="no_tlp" value=<?php echo $no_tlp; ?>></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><input type="text" name="ket" value=<?php echo $ket; ?>></td>
    </tr>
    <tr>
      <td><input type="hidden" name="id_anggota" value=<?php echo $_GET['id_anggota']; ?>></td>
      <td><input type="submit" name="update" value="Update"></td>
    </tr>
  </table>
</form>
<?php include '../template/footer.php'; ?>