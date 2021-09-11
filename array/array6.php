<?php
$arrnilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo "<b> Array Sebelum Pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

sort ($arrnilai);
reset ($arrnilai);
echo "<b> Array Setelah Pengurutan dengan sort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

rsort ($arrnilai);
reset ($arrnilai);
echo "<b> Array Setelah Pengurutan dengan rsort()</b>";
echo "<pre>";
print_r ($arrnilai);
echo "</pre>";
?>