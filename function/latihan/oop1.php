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
?>