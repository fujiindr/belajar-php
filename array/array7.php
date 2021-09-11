<?php
$arrnilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo "<b> Array Sebelum Pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

asort ($arrnilai);
reset ($arrnilai);
echo "<b> Array Setelah Pengurutan dengan asort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

arsort ($arrnilai);
reset ($arrnilai);
echo "<b> Array Setelah Pengurutan dengan arsort()</b>";
echo "<pre>";
print_r ($arrnilai);
echo "</pre>";
?>