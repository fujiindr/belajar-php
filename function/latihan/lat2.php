<html>
<form action = " " method = "post">
    <fieldset>
        <legend><h2>Lingkaran</h2></legend>
        
    Jari-jari <input type = "text" name = "jari-jari" required><br><br>
    <button type = "submit" name = "save">Save</button><br><br>
    
<?php
if (isset ($_POST ['save'])){
    $jr = $_POST ['jari-jari'];
    function luas ($jari, $phi = 3.14) 
    {
        $luas = $phi* $jari * $jari;
        return $luas;
    }
    function keliling ($jari, $phi = 3.14) 
    {
        $keliling = 2 * ($phi * $jari);
        return $keliling;
    }
    ?>

    Jari - jari Lingkaran = <?php echo $jr; ?> <br>
    Luas Lingkaran = <?php echo luas ($jr); ?> <br>
    Keliling Lingkaran = <?php echo keliling ($jr); ?>
<?php
}
?>
</fieldset>
</form>
</html>