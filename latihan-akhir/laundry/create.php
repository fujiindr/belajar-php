<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
    <fieldset>
        <legend>Input Data Laundry</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <td>Kode Pesanan</td>
                    <td><input type="text" name="kode" required></td>
                </tr>
                <tr>
                    <td>Tanggal Pesanan</td>
                    <td><input type="date" name="tanggal" required></td>
                </tr>
                 <tr>
                    <td>Tanggal Pengembalian</td>
                    <td><input type="date" name="kembali" required></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                <td>Jenis Paket </td>
                <td><select name = "paket">
                <option value = " ">Jenis Paket</option>
                <option value = "Cuci Satuan">Cuci Satuan</option>
                <option value = "Cuci Komplit">Cuci Komplit</option>
                <option value = "Cuci Satuan">Expres</option>
                </select></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td><input type="number" name="berat" required></td>
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
