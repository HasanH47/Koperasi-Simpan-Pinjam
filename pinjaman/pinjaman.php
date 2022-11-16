<?php include '../template/header.php'; ?>
<h2>Data Pinjaman Koperasi</h2>
<a href="http://localhost:8080/PAS/pinjaman/add_pinjaman.php">Add</a>
<table border="1" cellpadding="4">
    <tr bgcolor="silver">
        <th>No</th>
        <th>Nama Pinjaman</th>
        <th>No Anggota</th>
        <th>Besar Pinjaman</td>
        <th>Tanggal Pengajuan</th>
        <th>Tanggal ACC</th>
        <th>Tanggal Pinjaman</th>
        <th>Aksi</th>
    </tr>
    <?php
    include "../config/mysql.php";
    $query    = mysqli_query($mysqli, "SELECT * FROM pinjaman");
    while ($result    = mysqli_fetch_array($query)) {

    ?>
        <tr align="center">
            <td><?php echo $result['id_pinjaman'] ?></td>
            <td><?php echo $result['nama_pinjaman'] ?></td>
            <td><?php echo $result['id_anggota'] ?></td>
            <td><?php echo $result['besar_pinjaman'] ?></td>
            <td><?php echo $result['tgl_pengajuan_pinjaman'] ?></td>
            <td><?php echo $result['tgl_acc_peminjam'] ?></td>
            <td><?php echo $result['tgl_pinjaman'] ?></td>
            <td>
                <a href="http://localhost:8080/PAS/pinjaman/edit_pinjaman.php?id_pinjaman=<?= $result['id_pinjaman'] ?>">Edit</a>
                <a href="http://localhost:8080/PAS/pinjaman/hapus_pinjaman.php?id_pinjaman=<?= $result['id_pinjaman'] ?>">Delete</a>
                <a href="http://localhost:8080/PAS/pinjaman/detail_data.php?id_pinjaman=<?= $result['id_pinjaman'] ?>">Detail</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php include '../template/footer.php'; ?>