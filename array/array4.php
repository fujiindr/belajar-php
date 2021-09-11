<?php
$arrnilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo "<br> Menampilkan array dengan foreach : <br>";
foreach ($arrnilai as $nama => $nilai){
    echo "Nilai $nama = $nilai <br>";
}
reset ($arrnilai);
echo "<br> Menampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai) = each ($arrnilai)){
    echo "Nilai $nama = $nilai <br>";
}
?>