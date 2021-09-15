<?php

//mendefinisikan sebuah class
class kucing
{
    //membuat property atau attributes
    public $warna = "Coklat";
    public $jumlahKaki = 4;
    public $jenisBulu = "Panjang";
    public $makananFavorit = "Ikan Pindang";

    //membuat method (behaviour / )
    public function bersuara()
    {
        return "meowng... meowng... meowng...";
    }
    public function berburu()
    {
        return "berburu ikan";
    }
}
//membuat object (inisiasi object)
$kucing1 = new kucing();
echo "Warna Kucing : " . $kucing1->warna . "<br>";
echo "Sifat Kucing : " . $kucing1->bersuara() . "<hr>";

$kucing2 = new kucing();
//set warna kucing
$kucing2->warna = "Orange";
echo "Warna Kucing : " . $kucing2->warna . "<br>";
echo "Sifat Kucing : " . $kucing2->berburu() . "<hr>";
