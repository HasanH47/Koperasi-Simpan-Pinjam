<?php
include '../template/header.php'; ?>
<h2>Data Simpanan Koperasi</h2>
<a href="http://localhost:8080/PAS/simpanan/add_simpanan.php">Add</a>
<table border="1" cellpadding="4">
  <tr bgcolor="silver">
    <th>No</th>
    <th>Nama Simpanan</th>
    <th>No Anggota</th>
    <th>Tanggal Simpanan</td>
    <th>Besar Simpanan</th>
    <th>Keterangan</th>
    <th>Aksi</th>
  </tr>
  <?php
  include "../config/mysql.php";
  $query    = mysqli_query($mysqli, "SELECT * FROM simpanan");
  while ($result    = mysqli_fetch_array($query)) {

  ?>
    <tr align="center">
      <td><?php echo $result['id_simpanan'] ?></td>
      <td><?php echo $result['nm_simpanan'] ?></td>
      <td><?php echo $result['id_anggota'] ?></td>
      <td><?php echo $result['tgl_simpanan'] ?></td>
      <td><?php echo $result['besar_simpanan'] ?></td>
      <td><?php echo $result['ket'] ?></td>
      <td>
        <a href="http://localhost:8080/PAS/simpanan/edit_simpanan.php?id_simpanan=<?= $result['id_simpanan'] ?>">Edit</a>
        <a href="http://localhost:8080/PAS/simpanan/hapus_simpanan.php?id_simpanan=<?= $result['id_simpanan'] ?>">Delete</a>
        <a href="http://localhost:8080/PAS/simpanan/detail_data.php?id_simpanan=<?= $result['id_simpanan'] ?>">Detail</a>
      </td>
    </tr>
  <?php
  }
  ?>
</table>
<?php include '../template/footer.php'; ?>