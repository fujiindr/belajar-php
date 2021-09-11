<?php
//LOOPING PHP JSON

$datamhs = '[
    {"nama" : "Mahmud", "domisili" : "Bandung"},
    {"nama" : "Udin", "domisili" : "Tasik"},
    {"nama" : "Encep", "domisili" : "Majalaya"},
    {"nama" : "Entis", "domisili" : "Ciamis"}
]';

$data = json_decode($datamhs);
foreach ($data as $mhs){
    echo "Nama : " . $mhs->nama . "<br>";
    echo "Domisili : " . $mhs->domisili;
    echo "<hr>";
}
?>