<?php
class segitiga{
    public $alas = "10";
    public $tinggi = "15";
    public $sisi1 = "10";
    public $sisi2 = "15";
    public $sisi3 = "10";

    /*public $alas;
    public $tinggi;
    public $sisi1;
    public $sisi2;
    public $sisi3; */
    
    public function luas()
    {
        return $this-> luas = 0.5 * $this->alas * $this->tinggi;
    }
    public function keliling()
    {
        return  $this->keliling = $this->sisi1 + $this->sisi2 + $this->sisi3;
    }
}
$segitiga = new segitiga();
/*  $segitiga->alas = 10;
    $segitiga->tinggi = 15;
    $segitiga->sisi1 = 10;
    $segitiga->sisi2 = 15; 
    $segitiga->sisi3 = 10;*/
echo "Alas Segitiga: " . $segitiga->alas . "<br>";
echo "Tinggi Segitiga : " . $segitiga->tinggi . "<br>";
echo "Sisi  : " . $segitiga->sisi1 . "<br>";
echo "Sisi 2 : " . $segitiga->sisi2 . "<br>";
echo "Sisi 3 : " . $segitiga->sisi3 . "<br>";
echo "Luas Segitiga : " . $segitiga->luas() . "<br>";
echo "Keliling Segitiga : " . $segitiga->keliling();
?>