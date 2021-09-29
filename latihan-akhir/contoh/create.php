<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
    <center>
        <a href="data.php">Data Laundry | </a>
        <a href="create.php">Tambah Data Laundry</a>
    </center>
    <fieldset>
        <legend>Input Data Laundry</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <td>ID Karyawan</td>
                    <td><input type="text" name="id_karyawan" required></td>
                </tr>
                <tr>
                    <td>Nama Karyawan</td>
                    <td><input type="text" name="nama_karyawan" required></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="save">Simpan </button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
