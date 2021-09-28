<?php
include '../database.php';
$laundry = new laundry();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $kode = $_POST['kode'];
    $tanggal = $_POST['tanggal'];
    $kembali = $_POST['kembali'];
    $nama = $_POST['nama'];
    $paket = $_POST['paket'];
    $berat = $_POST['berat'];

    if ($aksi == "create") {
        $laundry->create($kode, $tanggal, $kembali, $nama, $paket, $berat);
        header("location:data.php");
    } elseif ($aksi == "update") {
        $laundry->update($id, $kode, $tanggal, $kembali, $nama, $paket, $berat);
        header("location:data.php");
    } elseif ($aksi == "delete") {
        $laundry->delete($id);
        header("location:data.php");
    }

}
