<?php

$url = "https://api.kawalcorona.com/";
//persiapkan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$output contains the output string
$datacovid = curl_exec($ch);
//tutup output
curl_close($ch);
//menampilkan hasil curl
?>
<html>
    <body>
        <center>
            <nav>
                <a href = "json-api2.php">Data Covid</a> |
                <a href = "json-api3.php">Data Indonesia</a> |
                <a href = "json-api4.php">Data Covid Provinsi</a> |
                <a href = "json-api5.php">Data Positif</a> |
                <a href = "json-api6.php">Data Meninggal</a>
            </nav>
        </center>
        <fieldset>
            <legend><h2>Data Covid</h2></legend>
            <table width= 100% border = 1>
                <tr>
                    <th>NO</th>
                    <th>Negara</th>
                    <th>Positif</th>
                    <th>Meninggal</th>
                    <th>Sembuh</th>
                </tr>
                <?php
                $no = 1;
                    $data = json_decode($datacovid);
                    foreach ($data as $covid){
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $covid->attributes->Country_Region;?></td>
                    <td><?php echo $covid->attributes->Confirmed;?></td>
                    <td><?php echo $covid->attributes->Deaths;?></td>
                    <td><?php echo $covid->attributes->Recovered;?></td>
                </tr>
                <?php }?>
            </table>
        </fieldset>
    </body>
</html>