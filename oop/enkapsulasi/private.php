<?php
class Komputer
{
    private $jenisProcessor = "Intel Core I7";

    public function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }
}

class Laptop extends Komputer
{
    public function getProcessor()
    {
        return $this->jenisProcessor;
    }
}

$laptop = new Laptop();
echo $laptop->getProcessor();
