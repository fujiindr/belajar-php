<?php
$arrnilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo "<b> Array Sebelum Pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

ksort ($arrnilai);
reset ($arrnilai);
echo "<b> Array Setelah Pengurutan dengan ksort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

krsort ($arrnilai);
reset ($arrnilai);
echo "<b> Array Setelah Pengurutan dengan krsort()</b>";
echo "<pre>";
print_r ($arrnilai);
echo "</pre>";
?>