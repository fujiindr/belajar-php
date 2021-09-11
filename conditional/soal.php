<?php

//if else//

    $nilai = 70;

    echo "1. If Else <br>";

if ($nilai >= 90){
    echo "Jika Nilai >= 90 Grade A";
}
else if ($nilai >= 80){
    echo "Jika Nilai >= 80 Grade B";
}
else if ($nilai >= 70){
    echo "Jika Nilai >= 70 Grade C";
}
else if ($nilai >= 60){
    echo "Jika Nilai >= 60 Grade D";
}
else {
    echo "Jika Nilai < 60 Grade E";
}
    echo "<hr>";

//switch case//

echo "2. Switch Case <br>";

    switch ($nilai)
{
	case ($nilai >= 90) :
		echo 'Jika Grade A -> Pertahankan';
		break;
	case ($nilai >= 80) :
		echo 'Jika Grade B -> Harus lebih baik lagi';
		break;
	case ($nilai >= 70) :
		echo 'Jika Grade C -> Perbanyak belajar';
		break;
    case ($nilai >= 60) :
        echo 'Jika Grade D -> Jangan keseringan main';
        break;
    case ($nilai >= 50) :
        echo 'Jika Grade E -> Kebanyakan bolos';
        break;
	default : 
		echo 'Format Tidak Sesuai';
}
echo "<hr>";

//kombinasi//
    echo "3. Switch Case <br>";
    echo "<hr>";
?>