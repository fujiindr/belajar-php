<?php
if (isset ($_POST['pilih'])){
    $jurusan = $_POST ['jurusan'];
    echo "Jurusan Anda Adalah 
    <b><font color = 'red'> $jurusan </font></b>";
}
?>