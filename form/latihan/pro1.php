<?php
if (isset ($_POST ['input'])){
    $bil1 = $_POST ['bil1'];
    $bil2 = $_POST ['bil2'];
    $jumlah = $bil1 + $bil2;
    echo "Bilangan 1 + Bilangan 2 = $jumlah";
    echo "<br>";
    $jumlah = $bil1 - $bil2;
    echo "Bilangan 1 - Bilangan 2 = $jumlah";
    echo "<br>";
    $jumlah = $bil1 * $bil2;
    echo "Bilangan 1 * Bilangan 2 = $jumlah";
    echo "<br>";
    $jumlah = $bil1 / $bil2;
    echo "Bilangan 1 / Bilangan 2 = $jumlah";
}
?>