<?php

//contoh1//
for ($i = 1; $i <= 10; $i++){
    echo "$i";
}
echo "<br><br>";

//contoh2//

for ($i = 1; ; $i++){
    if ($i > 10){
        break;
    }
    echo "$i";
}
echo "<br><br>";

//contoh3//

$i = 1;
for ( ; ;){
    if ($i > 10){
        break;
    }
    echo "$i";
    $i++;
}
echo "<br><br>";

//contoh4//

for ($i = 1; $i <= 10; print "$i", $i++);
?>