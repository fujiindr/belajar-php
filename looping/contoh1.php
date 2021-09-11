<?php

echo "No 1<br>";
for ($i = 2; $i <= 6; $i++){
    for ($j = 2; $j <= 10; $j++){
    }
    echo $i;
    echo "&nbsp";
    for ($j = 2; $j <= 10; $j++){
    }
    echo $i+1;
    echo "&nbsp";
    for ($j = 2; $j <= 10; $j++){
    }
    echo $i+2;
    echo "&nbsp";
    for ($j = 2; $j <= 10; $j++){
    }
    echo $i+3;
    echo "&nbsp";
    for ($j = 2; $j <= 10; $j++){
    }
    echo $i+4;
    echo "&nbsp";
    echo "<br>";
}
echo "<hr>";

echo "Perbaikan<br>";
for ($a = 2; $a <= 6; $a++){
    for ($b = $a; $b <= $a + 4; $b++){
    echo $b . "&nbsp";
    }
    echo "<br>";
}
echo "<hr>";

echo "No 2<br>";
$jumlah=0;
for ($i = 1; $i <= 10; $i++){
    $jumlah +=2;
    for ($j = 1; $j <= $i; $j++){
        echo $j + $jumlah ;
        echo "&nbsp";
    }
    echo "<br>";
}
echo "<hr>";
?>