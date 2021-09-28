<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$laundry = new laundry();
foreach ($laundry->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $kode = $data['kode'];
    $tanggal = $data['tanggal'];
    $kembali = $data['kembali'];
    $nama = $data['nama'];
    $paket = $data['paket'];
    $berat = $data['berat'];
}
?>
    <fieldset>
        <legend>Edit Data laundry</legend>
        <form action="proses.php" method="post">
            <input type="text" name="aksi" value="update">
            <input type="text" name="id" value="<?php echo $id; ?>">
            <table>
               <tr>
                    <td>Kode Pesanan</td>
                    <td><input type="text" name="kode" value="<?php echo $kode; ?>" required></td>
                </tr>
                <tr>
                    <td>Tanggal Pesanan</td>
                    <td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>" required></td>
                </tr>
                 <tr>
                    <td>Tanggal Pengembalian</td>
                    <td><input type="date" name="kembali" value="<?php echo $kembali; ?>" required></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                <td>Jenis Paket </td>
                  <td><select name = "paket">
                <option value = "<?php echo $jenis; ?>">Cuci Satuan</option>
                <option value = "<?php echo $jenis; ?>">Cuci Komplit</option>
                <option value = "<?php echo $jenis; ?>">Expres</option>
                </select></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td><input type="number" name="berat" value="<?php echo $berat; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>
