<?php include '../template/header.php'; ?>
<h2>Data Anggota Koperasi</h2>
<a href="http://localhost:8080/PAS/anggota/add_anggota.php">Add</a>
<table border="1" cellpadding="4">
  <tr bgcolor="silver">
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tanggal Lahir</td>
    <th>Tempat Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Aksi</th>
  </tr>
  <?php
  include "../config/mysql.php";
  $query    = mysqli_query($mysqli, "SELECT * FROM anggota");
  while ($result    = mysqli_fetch_array($query)) {

  ?>
    <tr align="center">
      <td><?php echo $result['id_anggota'] ?></td>
      <td><?php echo $result['nama'] ?></td>
      <td><?php echo $result['alamat'] ?></td>
      <td><?php echo $result['tgl_lhr'] ?></td>
      <td><?php echo $result['tmp_lhr'] ?></td>
      <td><?php echo $result['j_kel'] ?></td>
      <td>
        <a href="http://localhost:8080/PAS/anggota/edit_anggota.php?id_anggota=<?= $result['id_anggota'] ?>">Edit</a>
        <a href="http://localhost:8080/PAS/anggota/hapus_anggota.php=<?= $result['id_anggota'] ?>">Delete</a>
        <a href="http://localhost:8080/PAS/anggota/detail_data.php?id_anggota=<?= $result['id_anggota'] ?>">Detail</a>
      </td>
    </tr>
  <?php
  }
  ?>
</table>
<?php include '../template/footer.php'; ?>