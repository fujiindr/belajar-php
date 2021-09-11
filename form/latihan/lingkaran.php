<?php
if (isset ($_POST ['save'])){
    $jr = $_POST ['jari-jari'];
    echo "Lingkaran";
    echo "<br>";
    echo "<hr>";
    $jumlah = 3.14 * $jr * $jr;
    echo "Jari-jari = $jr<br>";
    echo "Luas = $jumlah<br>";
    $jumlah = 2 * 3.14 * $jr;
    echo "Keliling = $jumlah<br>";
}
?>