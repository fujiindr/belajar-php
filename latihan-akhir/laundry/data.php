<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>Data Laundry</center>
    <fieldset>
        <legend>Data Laundry</legend>
        <a href="create.php">Tambah Data Laundry</a>
        <table border="1">
            <tr>
                <th>No</th>
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
                    <td><?php echo $data['kode']; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['kembali']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['paket']; ?></td>
                    <td><?php echo $data['berat']; ?> Kg</td>
                    <td>
                        <a href = "show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href = "edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <a href = "detail.php?id=<?php echo $data['id']; ?>">Detail Pesanan</a>
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
