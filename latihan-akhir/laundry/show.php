<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$laundry = new laundry();
foreach ($laundry->show($_GET['id']) as $data) {
    $id = $data['id'];
    $kode_pesanan = $data['kode_pesanan'];
    $tanggal = $data['tanggal'];
    $kembali = $data['kembali'];
    $nama = $data['nama'];
    $paket = $data['paket'];
    $berat = $data['berat'];
    if ("Cuci Satuan" == $paket) {
        $total = $berat * 7000;
    } elseif ("Cuci Komplit" == $paket) {
        $total = $berat * 10000;
    } elseif ("Expres" == $paket) {
        $total = $berat * 15000;
    }

}
?>
 <center>
        <a href="data.php">Data Laundry | </a>
        <a href="create.php">Tambah Data Laundry</a>
    </center>
    <fieldset>
        <legend>Detail Data laundry</legend>
        <table>
                <tr>
                    <td>Kode Pesanan</td>
                    <td><input type="text" name="kode" value="<?php echo $kode_pesanan; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Tanggal Pesanan</td>
                    <td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>" readonly></td>
                </tr>
                 <tr>
                    <td>Tanggal Pengembalian</td>
                    <td><input type="date" name="kembali" value="<?php echo $kembali; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
                </tr>
                <tr>
                <td>Jenis Paket </td>
                  <td><select name = "paket">
                <option value = "<?php echo $paket; ?>" >Cuci Satuan</option>
                <option value = "<?php echo $paket; ?>" >Cuci Komplit</option>
                <option value = "<?php echo $paket; ?>" >Expres</option>
                </select></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td><input type="number" name="berat" value="<?php echo $berat; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="number" name="total" value="<?php echo $total; ?>" readonly></td>
                </tr>
                <tr>
                    <td>
                        Masukan Uang Pembayaran</td>
                        <td><input type="text" name="pembayaran"></td>
                </tr>
                <tr>
                    <td>
                    <button type="submit" name="bayar">Bayar</button>
                    </td>
                </tr>
                 </table>
    </fieldset>
</body>

</html>
