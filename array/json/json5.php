<?php
//LOOPING PHP JSON

$datamhs = [
    ['nama' => 'Udin', 'domisili' => 'Bandung'],
    ['nama' => 'Ucup', 'domisili' => 'Bandung'],
    ['nama' => 'Ujang', 'domisili' => 'Bandung'],
    ['nama' => 'Encep', 'domisili' => 'Bandung']
];

echo json_encode($datamhs);
?>