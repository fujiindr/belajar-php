<?php
    $nilai1 = 85;
    $nilai2 = 83;
    
    
    echo "Nilai Akademik : $nilai1";
    echo "<br>Nilai Atletik : $nilai2";
    $lulus = ($nilai1 >= 85 && $nilai2 >= 83)
    ? " Lulus" : " Tidak Lulus";;
    echo "<br>Dinyatakan : " . $lulus;
    echo "<br>"; 

?>