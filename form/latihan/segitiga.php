<?php
if (isset ($_POST ['save'])){
    $tinggi = $_POST ['tinggi'];
    $alas = $_POST ['alas'];
    echo "Segitiga";
    echo "<br>";
    echo "<hr>";
    $jumlah = 0.5 * $alas * $tinggi;
    echo "Alas = $alas<br>";
    echo "Tinggi = $tinggi<br>";
    echo "Luas = $jumlah";
    echo "<br>";
    echo "<hr>";

    $a = $_POST ['a'];
    $b = $_POST ['b'];
    $c = $_POST ['c'];
    $jumlah = $a + $b + $c;
    echo "A = $a<br>";
    echo "B = $b<br>";
    echo "C = $c<br>";
    echo "Keliling = $jumlah";
    echo "<br>";
}
?>