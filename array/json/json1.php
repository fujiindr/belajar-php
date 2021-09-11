<?php

$dataJson = "[1, 2, 3, 4, 5]";

$data = json_decode($dataJson);

echo implode(" - ", $data);
?>