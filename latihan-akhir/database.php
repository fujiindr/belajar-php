<?php
class Database
{
    public $host = "localhost", $user = "root", $pass = "", $db = "latihan-akhir";
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            // echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}
// Data Tabel Dosen & Mahasiswa
include 'laundry.php';
include 'karyawan.php';

// koneksi DB
$db = new Database();
