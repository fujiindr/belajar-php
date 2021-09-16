<?php

class komputer
{
    public $merk;
    public $processor;
    public $memory;

    public function beliKomputer()
    {
        return "Beli komputer baru";
    }
}

class laptop extends komputer
{
    public function lihatSpec()
    {
        return "Merk : $this->merk, Processor : $this->processor,
     Memory : $this->memory";
    }
}

$laptop = new laptop();

$laptop->merk = "Acer";
$laptop->processor = "Intel core i5";
$laptop->memory = "2 GB";

echo $laptop->beliKomputer() . "<br>";
echo $laptop->lihatSpec();
