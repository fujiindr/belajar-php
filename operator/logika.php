<?php

    echo "<b>Soal 1</b>";
    echo "<br>";

    $a = 1;
    $b = 9;
    $c = 10;
    $d = 11;

    echo "<br>$a < $c : " . ($a < $b);
    echo "<br>$b > $c dan $c > $b : " 
    . (($b > $c) && ($c > $b));
    echo "<br>$c > $d atau $b < $c : " 
    . (($c > $d) || ($b > $c));
    echo "<hr>";

    echo "<b>Soal 2</b>";
    echo "<br>";
    $tono = 10000;
    $tini = 8000;
    $toni = 15000;

    echo "<br>Uang Toni = $toni";
    echo "<br>Uang Tono = $tono";
    echo "<br>Uang Tini = $tini";
    echo "<br>";
    echo "<br>1. Apakah uang Toni lebih besar dari Tono dan Tini?";
    echo "<br> $toni > $tono dan $tini = " 
    . (($toni > $tono) && ($toni > $tini));
    echo "<br>";
    
    echo "<br>2. Apakah uang Toni lebih besar dari Tini dan tidak lebih besar dari Tono?";
    echo "<br> $toni > $tini dan $toni < $tono = " 
    . (($toni > $tini) && ($toni < $tono));
    echo "<br>";
    echo "<hr>";

    echo "<b>Soal 3</b>";
    echo "<br>";
    $user = "user123";
    $pass = "pass123";

    echo "<br>Masukkan Username : $user";
    echo "<br>Masukkan Password : $pass";
    echo "<br>Login = "
    . (($user == "user123") || ($pass == "pass123"));
    echo "<br>";
?>