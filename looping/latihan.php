<?php

$i = 2;
echo "1. ";
do {
    echo " $i ";
    $i *= 2;
}
while($i <= 128);
echo "<br>";
echo "<hr>";

$i = 3125;
echo "2. ";
do {
    echo " $i ";
    $i /= 5;
}
while($i >= 5);
echo "<br>";
echo "<hr>";

echo "3. ";
$a = [
    18, 45, 29, 61, 47, 34
];
foreach ($a as $b){
    $sisabagi = $b % 3;
    echo "$b % 3 = $sisabagi<br>";
}
echo "<br>";
echo "<hr>";

echo "4. <br>";
for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo " * ";
    }
    echo "<br>";
}
echo "<hr>";
echo "<br>";

echo "5. <br>";
for ($i = 1; $i <= 6; $i++){
    for ($j = 6; $j >= $i; $j--){
        echo "&nbsp";
    }
    for ($k = 1; $k <= $i; $k++){
        echo " * ";
    }
    echo "<br>";
}
echo "<hr>";
?>