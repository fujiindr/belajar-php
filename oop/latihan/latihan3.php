<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <FORM ACTION = " " METHOD = "POST" NAME = "input">
        <fieldset>
            <legend>Aritmatika</legend>
        <table>
            <tr>
                <td>Masukan Bilangan 1 : <input type = "text" name = "bil1"></td>
            </tr>
            <tr>
                <td>Masukan Bilangan 2 : <input type = "text" name = "bil2"></td>
            </tr>
            <tr>
                <td><input type = "submit" name = "input" value = "input">
                <input type = "reset" value = "reset"></td>
            </tr>
        </table>
    </fieldset>
<?php
if (isset($_POST['input'])){
    $bil1 = $_POST ['bil1'];
    $bil2 = $_POST ['bil2'];

    /* mengambil file dari a.php
       require_once 'a.php';
    */

    class aritmatika
    {
        public $bil1, $bil2;
        
        public function __construct($a, $b)
        {
            $this->bil1 = $a;
            $this->bil2 = $b;
        }
        public function penjumlahan()
        {
            return $this->bil1 + $this->bil2;
        }
        public function pengurangan()
        {
            return $this->bil1 - $this->bil2;
        }
        public function perkalian()
        {
            return $this->bil1 * $this->bil2;
        }
        public function pembagian()
        {
            return $this->bil1 / $this->bil2;
        }
        public function modulus()
        {
            return $this->bil1 % $this->bil2;
        }

    }

$bil = new aritmatika($bil1, $bil2);

?>
<table>
    <tr>
        <td>Penjumlahan <?php echo $bil->bil1 . " + " . $bil->bil2;?> </td>
        <td> : <?php echo $bil->penjumlahan();?></td>
    </tr>
    <tr>
        <td>Pengurangan <?php echo $bil->bil1 . " - " . $bil->bil2;?></td>
        <td> : <?php echo $bil->pengurangan();?></td>
    </tr>
    <tr>
        <td>Perkalian <?php echo $bil->bil1 . " x " . $bil->bil2;?></td>
        <td> : <?php echo $bil->perkalian();?></td>
    </tr>
    <tr>
        <td>Pembagian <?php echo $bil->bil1 . " / " . $bil->bil2;?></td>
        <td> : <?php echo $bil->pembagian();?></td>
    </tr>
    <tr>
        <td>Sisa Hasil Bagi <?php echo $bil->bil1 . " % " . $bil->bil2;?></td>
        <td> : <?php echo $bil->modulus();?></td>
    </tr>
</table>
<?php } ?>
</FORM>
</body>
</html>