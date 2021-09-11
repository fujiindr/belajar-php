<?php

$url = "https://api.kawalcorona.com/positif/";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$datacovid = curl_exec($ch);

curl_close($ch);
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
            <?php
                    $data = json_decode($datacovid);
                ?>
                <tr>
                    <th><?php echo $data->name;?></th>
                </tr>
                <tr>
                    <td><?php echo $data->value;?></td>
                </tr>
            </table>
        </fieldset>
    </body>
</html>