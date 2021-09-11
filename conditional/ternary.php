<?php
    $tahun= date ('Y');
    $kabisat = $tahun % 4 == 0;
    $jawab = $kabisat ? " Ya" : " Bukan Tahun Kabisat";
    echo "Tahun $tahun " . $jawab;
    echo "<br>"; 
?>