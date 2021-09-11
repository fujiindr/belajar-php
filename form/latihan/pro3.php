<?php
if (isset ($_POST ['input'])){
    $bintang = $_POST ['bintang'];
    for ($i = 1; $i <= $bintang ; $i++){
        for ($j = $bintang; $j >= $i; $j--){
            echo "&nbsp";
        }
        for ($k = 1; $k <= $i; $k++){
            echo " * ";
        }
        echo "<br>";
    }
    for ($l = $bintang; $l >= 1; $l--){
        for ($m = $bintang; $m >= $l; $m--){
            echo "&nbsp";
        }
        for ($n = 1; $n <= $l; $n++){
            echo " * ";
        }
        echo "<br>";
    }
}
?>