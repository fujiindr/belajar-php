<?php
class OrangTua
{
    protected $noAtm = "1111-2222-3333-4444";
    private $pinAtm = "001122";

    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}
class Anak extends OrangTua
{

    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

$orangTua = new OrangTua();
$anak = new Anak();

// ingin mengetahui data atm dari object orang tua
echo "No Kartu Atm : " . $orangTua->noAtm() . "<br>";
echo "Pin Atm : " . $orangTua->pinAtm() . "<hr>";

// anak ingin mengetahui data atm dari class orang tua
echo "No Kartu Atm : " . $anak->noAtm() . "<br>";
echo "Pin Atm : " . $anak->pinAtm();
