<?php
function faktorial($n){
    echo "Faktorial({$n}) = Faktorial(" . ($n - 1) . ") <br>";
    if ($n > 2){
        faktorial($n - 1);
    }
}
faktorial(5);
?>