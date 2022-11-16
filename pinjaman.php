<?php
include '../config/mysql.php';

$id        = mysqli_real_escape_string($koneksi, $_GET['id']);

$sql = "SELECT * FROM anggota WHERE id_anggota='$id'";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
}
?>
<?php include '../template/header.php'; ?>
</head>

<body>
    <Center>
        <h1>Pinjaman</h1>
    </Center>
    <form action="" method="POST" name="myform">
        <table border="0" align="center">
            <tr>
                <td>Nama</td>
                <td><input name='nama' value="<?php echo $data['nama']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Id</td>
                <td><input name='id_anggota' value="<?php echo $data['id_anggota']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nominal Pinjaman</td>
                <td><select name="besar_pinjaman" id="besar_pinjaman">
                        <option value=" ">---isi nominal pinjaman---</option>
                        <option value="100">100.000</option>
                        <option value="250">250.000</option>
                        <option value="500">500.000</option>
                        <option value="1000">1.000.000</option>
                    </select></td>
            </tr>
            <tr>
                <td>Tanggal Pengajuan Pinjaman</td>
                <td><input name='tgl_pengajuan_pinjaman' value="<?php echo date('d/m/Y'); ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Tanggal Persetujuan Pinjaman</td>
                <td><input name='tgl_acc_peminjam' value="<?php echo date('d/m/Y'); ?>" readonly>
                </td>
            </tr>
        </table>
    </form>
    <?php include '../template/footer.php' ?>