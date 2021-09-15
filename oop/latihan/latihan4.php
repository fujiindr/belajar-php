<?php

class kucing
{
    public $warna;
    public $kucing;
    protected $kucing1 = "3 Kaki";
    protected $kucing2 = "4 Kaki";
    protected $kucing3 = "5 Kaki";

    public function kucing()
    {
        $kucing1 = $this->kucing1;
        $kucing2 = $this->kucing2;
        if ($kucing1 == "3 Kaki") {
            $a = "Kucing Cingked";
        } elseif ($kucing2 == "4 Kaki") {
            $b = "Kucing Normal";
        } else {
            $c = "Siluman Kucing";
        }
        return $a;
    }
}
/*class kakiKucing extends kucing
{
public function kaki()
{
return $this->kucing;
}
}*/
$kucing = new kucing();
//$login = new b();
$kucing->warna = "Merah";
echo "Kucing : " . $kucing->warna . "<br>";
//echo "Kaki Kucing : " . $kucing->kucing1 . "<br>";
//echo "Email : " . $login->email() . "<br>";
echo $kucing->kucing() . "<br>";
