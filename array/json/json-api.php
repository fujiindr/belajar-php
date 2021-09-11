<?php
$url = "https://api.kawalcorona.com/";
//persiapkan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$output contains the output string
$output = curl_exec($ch);
//tutup output
curl_close($ch);
//menampilkan hasil curl
echo $output;
?>