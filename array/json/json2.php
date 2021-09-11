<?php

$datajson = '{
  "nama": "ujang",
  "domisili": "Bandung",
  "usia": 23,
  "wni": true,
  "hobi": [
    "Futsal", "Main Game", "Main Kelereng"
  ]
}';

$data = json_decode($datajson);

echo "Nama: " . $data->nama . "<br>";
echo "Domisili: " . $data->domisili . "<br>";
echo "Usia : " . $data->usia . "<br>";
echo "Hobi: " . implode(", ", $data->hobi);
?>