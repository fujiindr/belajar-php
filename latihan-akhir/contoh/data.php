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
        <legend>Data Karyawan</legend>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID Karyawan</th>
                <th>Nama Karyawan</th>
            </tr>
             <?php
include '../database.php';
$karyawan = new karyawan();
$no = 1;
foreach ($karyawan->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id_karyawan']; ?></td>
                    <td><?php echo $data['nama_karyawan']; ?></td>
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

