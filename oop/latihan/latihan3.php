<?php
class a
{
    public $akun = "fuji.idr";
    protected $email = "fuji@gmail.com";
    private $pass = "fuji123";

    public function login()
    {
        $email = $this->email;
        $b = $this->pass;
        if ($email == "fuji@gmail.com" && $b == "fuji123") {
            $c = "Login Berhasil";
        } else {
            $c = "Login Gagal";
        }
        return $c;
    }
    /*public function info()
{
$email = $this->email;
$b = $this->akun;
$c = "Email : " . $email . "<br>Nama Akun : " . $b;
return $c;
}*/
}
class b extends a
{
    public function email()
    {
        return $this->email;
    }
}

$daftar = new a();
$login = new b();
echo "Nama Akun : " . $daftar->akun . "<br>";
echo "Email : " . $login->email() . "<br>";
echo $daftar->login() . "<br>";
