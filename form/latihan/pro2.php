<?php
if (isset($_POST ['pilih'])){
    $pilihan = $_POST ['program'];
    if ($pilihan == 1){
        header("location:segitiga1.php");
    }
    else if ($pilihan == 2){
        header("location:lingkaran1.php");
    }
    else if ($pilihan == 3){
        header("location:persegi1.php");
    }
    else{
        header("location:persegipanjang1.php");
    }
}
?>
