<?php
class komputer
{
    protected function beliKomputer()
    {
        return "Beli komputer baru";
    }
}

class laptop extends komputer
{
    protected function beliLaptop()
    {
        return "Beli laptop baru";
    }
}

class chromebook extends laptop
{
    protected function beliChromebook()
    {
        return "Beli chromebook baru";
    }

    public function beli_semua()
    {
        $a = $this->beliKomputer();
        $b = $this->beliLaptop();
        $c = $this->beliChromebook();
        return "$a <br /> $b <br /> $c";
    }
}

$gadgetBaru = new chromebook();
echo $gadgetBaru->beli_semua();
