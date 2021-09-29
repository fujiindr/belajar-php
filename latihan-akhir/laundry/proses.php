<?php
include '../database.php';
$laundry = new laundry();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $kode_pesanan = $_POST['kode_pesanan'];
    $tanggal = $_POST['tanggal'];
    $kembali = $_POST['kembali'];
    $nama = $_POST['nama'];
    $paket = $_POST['paket'];
    $berat = $_POST['berat'];
    $id_karyawan = $_POST['id_karyawan'];

    if ($aksi == "create") {
        $laundry->create($id_karyawan, $kode_pesanan, $tanggal, $kembali, $nama, $paket, $berat);
        header("location:data.php");
    } elseif ($aksi == "update") {
        $laundry->update($id, $id_karyawan, $kode_pesanan, $tanggal, $kembali, $nama, $paket, $berat);
        header("location:data.php");
    } elseif ($aksi == "delete") {
        $laundry->delete($id);
        header("location:data.php");
    }

}
