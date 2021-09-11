<?php
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];
//menambahkan isi array pada indeks ke 1
$hobi [1] .= " Coding"; //Menulis Coding
//untuk menghapus array
unset ($hobi[1]);
//untuk menambahkan isi array
$hobi [3] = "Memasak";
//menambahkan isi array pada indeks terakhir
$hobi[] = "Olahraga";

foreach($hobi as $hobiku){
    echo $hobiku . "<br>";
}
?>