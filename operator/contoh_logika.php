<?php
    $a = 7;
    $b = 4;

    echo "$a == $b : " . ($a == $b);
    echo "<br>$a != $b : " . ($a != $b);
    echo "<br>$a > $b : " . ($a > $b);
    echo "<br>$a < $b : " . ($a < $b);
    echo "<br>($a == $b) && ($a > $b) : " 
            . (($a == $b) && ($a > $b));
    echo "<br>($a == $b) || ($a > $b) : " 
            . (($a != $b) || ($a > $b));
?>