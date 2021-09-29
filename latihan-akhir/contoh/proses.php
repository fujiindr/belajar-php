<?php
include '../database.php';
$karyawan = new karyawan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan = $_POST['nama_karyawan'];

    if ($aksi == "create") {
        $karyawan->create($id_karyawan, $nama_karyawan);
        header("location:data.php");
    } elseif ($aksi == "update") {
        $karyawan->update($id, $id_karyawan, $nama_karyawan);
        header("location:data.php");
    } elseif ($aksi == "delete") {
        $karyawan->delete($id);
        header("location:data.php");
    }

}
