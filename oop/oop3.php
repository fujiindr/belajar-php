<?php
class kucing
{
    public $warna;

    public function __costruct()
    {
        $this->warna = $warna;
    }
    public function bersuara()
    {
        return "meowng... meowng... meowng...";
    }
    public function berburu()
    {
        return "berburu ikan";
    }
}
$kucing1 = new kucing("Hitam");
echo "Warna Kucing 1 : " . $kucing1->warna . "<br>";

$kucing2 = new kucing("Orange");
echo "Warna Kucing 2 : " . $kucing2->warna . "<br>";