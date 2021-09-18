<?php
$member = "tidak";
$totalbelanja = 50000;
$disc = 0;

if ($member == "ya") {
    if ($totalbelanja >= 250000) {
        $disc = 0.1 * $totalbelanja;
    } else if ($totalbelanja >= 100000) {
        $disc = 0.05 * $totalbelanja;
    }
} else {
    if ($totalbelanja >= 100000) {
        $disc = 0.025 * $totalbelanja;
    }
}
$totalharga = $totalbelanja - $disc;
echo "Kartu Member : $member<br>";
echo "Total Belanja : $totalbelanja<br>";
echo "Diskon : $disc<br>";
echo "Total yang harus dibayar : $totalharga<br>";
