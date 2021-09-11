<?php
$nilai = [90, 80, 60, 100, 127, 81, 51, 99];
function nilaiMax($nilai){
    $a = count($nilai);
    $max = $nilai[0];
    for ($i = 0; $i < $a; $i++){
        if ($max < $nilai [$i]){
            $max = $nilai [$i];
        }
    }
    return $max;
}
function nilaiMin($nilai){
    $a = count($nilai);
    $min = $nilai[0];
    for ($i = 0; $i < $a; $i++){
        if ($min > $nilai [$i]){
            $min = $nilai [$i];
        }
    }
    return $min;
}

echo "Nilai Minimal adalah = " . nilaiMin($nilai) . "<br>";
echo "Nilai Maksimal adalah = " . nilaiMax($nilai) . "<br>";

//echo "Nilai Minimal adalah = " . min($nilai) . "<br>";
//echo "Nilai Maksimal adalah = " . max($nilai);
?>

