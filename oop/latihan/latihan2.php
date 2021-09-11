<?php
class segitiga{
    public $alas = "10";
    public $tinggi = "15";
    public $sisi1 = "10";
    public $sisi2 = "15";
    public $sisi3 = "10";

    
    public function luas()
    {
        return $this-> luas = 0.5 * $this->alas * $this->tinggi;
    }
    public function keliling()
    {
        return  $this->keliling = $this->sisi1 + $this->sisi2 + $this->sisi3;
    }
}
$segitiga1 = new segitiga();
echo "Alas Segitiga: " . $segitiga1->alas . "<br>";
echo "Tinggi Segitiga : " . $segitiga1->tinggi . "<br>";
echo "Sisi 1 : " . $segitiga1->sisi1 . "<br>";
echo "Sisi 2 : " . $segitiga1->sisi2 . "<br>";
echo "Sisi 3 : " . $segitiga1->sisi3 . "<br>";
echo "Luas Segitiga : " . $segitiga1->luas() . "<br>";
echo "Keliling Segitiga : " . $segitiga1->keliling();
?>