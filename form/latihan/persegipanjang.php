<?php
if (isset ($_POST ['save'])){
    $panjang = $_POST ['panjang'];
    $lebar = $_POST ['lebar'];
    echo "Persegi Panjang";
    echo "<br>";
    echo "<hr>";
    $jumlah = $panjang * $lebar;
    echo "Panjang = $panjang<br>";
    echo "Lebar = $lebar<br>";
    echo "Luas = $jumlah<br>";
    $jumlah = 2 * $panjang + $lebar;
    echo "Keliling = $jumlah<br>";
}
?>