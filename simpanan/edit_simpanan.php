<?php
// include database connection file
include_once("../config/mysql.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
  $id_simpanan = $_POST['id_simpanan'];

  $nm_simpanan = $_POST['nm_simpanan'];
  $id_anggota = $_POST['id_anggota'];
  $tgl_simpanan = $_POST['tgl_simpanan'];
  $besar_simpanan = $_POST['besar_simpanan'];
  $ket = $_POST['ket'];

  // update user data
  $result = mysqli_query($mysqli, "UPDATE simpanan SET nm_simpanan='$nm_simpanan',id_anggota='$id_anggota',tgl_simpanan='$tgl_simpanan',besar_simpanan='$besar_simpanan',ket='$ket' WHERE id_simpanan=$id_simpanan");

  // Redirect to homepage to display updated user in list
  header("Location: http://localhost:8080/PAS/simpanan/simpanan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_simpanan = $_GET['id_simpanan'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM simpanan WHERE id_simpanan=$id_simpanan");

while ($user_data = mysqli_fetch_array($result)) {
  $nm_simpanan = $user_data['nm_simpanan'];
  $id_anggota = $user_data['id_anggota'];
  $tgl_simpanan = $user_data['tgl_simpanan'];
  $besar_simpanan = $user_data['besar_simpanan'];
  $ket = $user_data['ket'];
}
include '../template/header.php';
?>
<a href="simpanan.php">Kembali</a>
<br /><br />

<form name="update_user" method="post" action="edit_simpanan.php">
  <table border="0">
    <tr>
      <td>Nama Simpanan</td>
      <td><input type="radio" name="nm_simpanan" value="Simpanan Pokok" <?php if ($nm_simpanan == 'Simpanan Pokok') echo 'checked' ?>>
        <label for="Simpanan Pokok">Simpanan Pokok</label><br>
        <input type="radio" name="nm_simpanan" value="Simpanan Wajib" <?php if ($nm_simpanan == 'Simpanan Wajib') echo 'checked' ?>>
        <label for="Simpanan Wajib">Simpanan Wajib</label><br>
        <input type="radio" name="nm_simpanan" value="Simpanan Sukarela" <?php if ($nm_simpanan == 'Simpanan Sukarela') echo 'checked' ?>>
        <label for="Simpanan Sukarela">Simpanan Sukarela</label><br>
      </td>
    </tr>
    <tr>
      <td>No Anggota</td>
      <td><input type="text" name="id_anggota" value="<?php echo $id_anggota; ?>" readonly></td>
    </tr>
    <tr>
      <td>Tanggal Simpanan</td>
      <td><input type="text" name="tgl_simpanan" value=<?php echo $tgl_simpanan; ?> readonly></td>
    </tr>
    <tr>
      <td>Besar Simpanan</td>
      <td><input type="text" name="besar_simpanan" value=<?php echo $besar_simpanan; ?>></td>
    </tr>
    <td>Keterangan</td>
    <td><input type="text" name="ket" value=<?php echo $ket; ?>></td>
    </tr>
    <tr>
      <td><input type="hidden" name="id_simpanan" value=<?php echo $_GET['id_simpanan']; ?>></td>
      <td><input type="submit" name="update" value="Update"></td>
    </tr>
  </table>
</form>
<?php include '../template/footer.php'; ?>