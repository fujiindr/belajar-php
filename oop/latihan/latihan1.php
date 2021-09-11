<?php
class komputer{
    public $nama = "Fuji";
    public $jk = "Perempuan";
    public $merek = "Asus";
    public $layar = "4 inc";

    public function hidup()
    {
        return "Komputer bisa dihidupkan";
    }
    public function mati()
    {
        return "Komputer bisa dimatikan";
    }
}
$komputer1 = new komputer();
echo "Nama Pemilik : " . $komputer1->nama . "<br>";
echo "Jenis Kelamin Pemilik : " . $komputer1->jk . "<br>";
echo "Merek komputer : " . $komputer1->merek . "<br>";
echo "Ukuran Layar komputer : " . $komputer1->layar . "<br>";
echo "Sifat komputer : " . $komputer1->hidup() . "<hr>";

$komputer2 = new komputer();
$komputer2->nama = "Indah";
$komputer2->merek = "Samsung";
echo "Nama Pemilik : " . $komputer2->nama . "<br>";
echo "Jenis Kelamin Pemilik : " . $komputer2->jk . "<br>";
echo "Merek komputer : " . $komputer2->merek . "<br>";
echo "Ukuran Layar komputer : " . $komputer2->layar . "<br>";
echo "Sifat komputer : " . $komputer2->mati() . "<hr>";

$komputer3 = new komputer();
$komputer3->nama = "Yusuf";
$komputer3->jk = "Laki-laki";
$komputer3->merek = "HP";
echo "Nama Pemilik : " . $komputer3->nama . "<br>";
echo "Jenis Kelamin Pemilik : " . $komputer3->jk . "<br>";
echo "Merek komputer : " . $komputer3->merek . "<br>";
echo "Ukuran Layar komputer : " . $komputer3->layar . "<br>";
echo "Sifat komputer : " . $komputer3->hidup() . "<hr>";

$komputer4 = new komputer();
$komputer4->nama = "Ahmad";
$komputer4->jk = "Laki-laki";
$komputer4->merek = "Philips";
$komputer4->layar = "2 inc";
echo "Nama Pemilik : " . $komputer4->nama . "<br>";
echo "Jenis Kelamin Pemilik : " . $komputer4->jk . "<br>";
echo "Merek komputer : " . $komputer4->merek . "<br>";
echo "Ukuran Layar komputer : " . $komputer4->layar . "<br>";
echo "Sifat komputer : " . $komputer4->mati() . "<hr>";

$komputer5 = new komputer();
$komputer5->nama = "Rahayu";
$komputer5->merek = "Lenovo";
$komputer5->layar = "3 inc";
echo "Nama Pemilik : " . $komputer5->nama . "<br>";
echo "Jenis Kelamin Pemilik : " . $komputer5->jk . "<br>";
echo "Merek komputer : " . $komputer5->merek . "<br>";
echo "Ukuran Layar komputer : " . $komputer5->layar . "<br>";
echo "Sifat komputer : " . $komputer5->hidup() . "<hr>";
?>