<?php include '../template/header.php'; ?>
<h2>Data Petugas Koperasi</h2>
<a href="http://localhost:8080/PAS/petugas/add_petugas.php">Add</a>
<table border="1" cellpadding="4">
  <tr bgcolor="silver">
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No Telephone</td>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Aksi</th>
  </tr>
  <?php
  include "../config/mysql.php";
  $query    = mysqli_query($mysqli, "SELECT * FROM petugas_koperasi");
  while ($result    = mysqli_fetch_array($query)) {

  ?>
    <tr align="center">
      <td><?php echo $result['id_petugas'] ?></td>
      <td><?php echo $result['nama'] ?></td>
      <td><?php echo $result['alamat'] ?></td>
      <td><?php echo $result['no_tlp'] ?></td>
      <td><?php echo $result['tmp_lhr'] ?></td>
      <td><?php echo $result['tgl_lhr'] ?></td>
      <td>
        <a href="http://localhost:8080/PAS/petugas/edit_petugas.php?id_petugas=<?= $result['id_petugas'] ?>">Edit</a>
        <a href="http://localhost:8080/PAS/petugas/hapus_petugas.php?id_petugas=<?= $result['id_petugas'] ?>">Delete</a>
        <a href="http://localhost:8080/PAS/petugas/detail_data.php?id_petugas=<?= $result['id_petugas'] ?>">Detail</a>
      </td>
    </tr>
  <?php
  }
  ?>
</table>
<?php include '../template/footer.php'; ?>