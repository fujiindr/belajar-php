<?php

class komputer
{

    public $merk = "Acer";

    public function lihatSpec()
    {
        return "Spec Komputer: Acer,
     Processor Intel core i7, Ram 4GB";
    }
}

class laptop extends komputer
{
    public $merk = "Asus";

    public function lihatSpec()
    {
        return "Spec Laptop: Asus,
     Processor Intel core i5, Ram 2GB";
    }

    public function lihatSpecKomputer()
    {
        return parent::lihatSpec();
    }
    public function lihatMerkKomputer()
    {
        return parent::$this->merk;
    }
}
$gadgetBaru = new laptop();

echo $gadgetBaru->lihatSpec() . "<br>";
echo $gadgetBaru->lihatSpecKomputer();
echo $gadgetBaru->lihatMerkKomputer();
