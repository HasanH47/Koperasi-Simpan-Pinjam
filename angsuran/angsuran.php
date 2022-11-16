<?php include '../template/header.php'; ?>
<h2>Data Angsuran Koperasi</h2>
<a href="http://localhost:8080/PAS/angsuran/add_angsuran.php">Add</a>
<table border="1" cellpadding="4">
    <tr bgcolor="silver">
        <th>No</th>
        <th>No Kategori</th>
        <th>No Anggota</th>
        <th>Tanggal Pembayaran</td>
        <th>Angsuran Ke</th>
        <th>Besar Angsuran</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    <?php
    include "../config/mysql.php";
    $query    = mysqli_query($mysqli, "SELECT * FROM angsuran");
    while ($result    = mysqli_fetch_array($query)) {

    ?>
        <tr align="center">
            <td><?php echo $result['id_angsuran'] ?></td>
            <td><?php echo $result['id_kategori'] ?></td>
            <td><?php echo $result['id_anggota'] ?></td>
            <td><?php echo $result['tgl_pembayaran'] ?></td>
            <td><?php echo $result['angsuran_ke'] ?></td>
            <td><?php echo $result['besar_angsuran'] ?></td>
            <td><?php echo $result['ket'] ?></td>
            <td>
                <a href="http://localhost:8080/PAS/angsuran/edit_angsuran.php?id_angsuran=<?= $result['id_angsuran'] ?>">Edit</a>
                <a href="http://localhost:8080/PAS/angsuran/hapus_angsuran.php?id_angsuran=<?= $result['id_angsuran'] ?>">Delete</a>
                <a href="http://localhost:8080/PAS/angsuran/detail_data.php?id_angsuran=<?= $result['id_angsuran'] ?>">Detail</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php include '../template/footer.php'; ?>