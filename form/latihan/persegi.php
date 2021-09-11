<?php
if (isset ($_POST ['save'])){
    $sisi = $_POST ['sisi'];
    echo "Persegi";
    echo "<br>";
    echo "<hr>";
    $jumlah = $sisi * $sisi;
    echo "Sisi = $sisi<br>";
    echo "Luas = $jumlah<br>";
    $jumlah = 4 * $sisi;
    echo "Keliling = $jumlah<br>";
}
?>