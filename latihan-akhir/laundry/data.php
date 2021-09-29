<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <a href="data.php">Data Laundry | </a>
        <a href="create.php">Tambah Data Laundry</a>
    </center>
    <fieldset>
        <legend>Data Laundry</legend>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID karyawan</th>
                <th>Kode Pesanan</th>
                <th>Tanggal Pesanan</th>
                <th>Tanggal Pengambilan</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Paket</th>
                <th>Berat</th>
                <th colspan="4">Aksi</th>
            </tr>
             <?php
include '../database.php';
$laundry = new laundry();
$no = 1;
foreach ($laundry->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id_karyawan']; ?></td>
                    <td><?php echo $data['kode_pesanan']; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['kembali']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['paket']; ?></td>
                    <td><?php echo $data['berat']; ?> Kg</td>
                    <td>
                        <a href = "show.php?id=<?php echo $data['id']; ?>">Detail</a>
                    </td>
                    <td>
                        <a href = "edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </table>
    </fieldset>
</body>

</html>
