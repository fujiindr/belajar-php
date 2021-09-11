<?php
    $uang = 200000;
    $minum = 15000;
    $makan = 25000;

    echo "Uang Ucup = $uang";
    echo "<hr>";

    $hasil = $uang -= $minum;
    echo "Jajan Minum $minum";
    echo "<br>Sisa uang Ucup jajan minum = $hasil";
    echo "<hr>";

    $hasil = $hasil -= $makan;
    echo "Jajan sosis bakar $makan";
    echo "<br>Sisa uang Ucup jajan sosis bakar + minum = $hasil";
    echo "<hr>";

    echo "Sedekah ke musafir 10% dari $hasil";
    $sedekah = $hasil * 0.1;
    echo " yaitu sebesar $sedekah";
    $hasil = $hasil -= $sedekah;
    echo "<br>Sisa uang Ucup sekarang = $hasil";
    echo "<hr>";

    echo "Nemu uang dijalan sebesar 50% dari sisa uang ucup $hasil";
    $nemu = $hasil * 0.5;
    echo " yaitu sebesar $nemu";
    echo "<br>Sisa uang Ucup sekarang = $nemu" . " + $hasil";
    echo "<hr>";

    $hasil= $hasil += $nemu;
    echo " Total uang ucup sekarang Rp.$hasil"; 
?>