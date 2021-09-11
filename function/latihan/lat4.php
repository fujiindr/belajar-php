<html>
    <body>
        <table>
        <FORM ACTION = "" METHOD = "POST" NAME = "input">
            <tr>
                <td>Masukan Bilangan </td>
                <td> : <input type = "text" name = "bil" required></td>
            </tr>
            <tr>
                <td>Masukan Pangkat </td>
                <td> : <input type = "text" name = "pangkat" required></td>
            </tr>
            <tr>
                <td>
                    <input type = "submit" name = "input" value = "Input">
                </td>
            </tr></form>
        </table><br>
    </body>
</html>
<?php
if (isset($_POST['input'])){
    $bil = $_POST ['bil'];
    $pangkat = $_POST ['pangkat'];
/*function perpangkatan($bil, $pangkat){
    $hasil = $bil ** $pangkat;
    return $hasil;
}
echo "Hasil dari perkalian <br>"; 
echo "dari $bil dan $pangkat adalah = ";
echo perpangkatan($bil, $pangkat);*/
    

function pangkat($bil, $pangkat)
{
    if ($pangkat > 1){
        return $bil * pangkat($bil, $pangkat - 1);
    }
    else{
        return $bil;
    }
}
function pangkatnya($bil, $pangkat)
{
for ($i = 1; $i <= $pangkat; $i++){
    echo $bil;
    if($i < $pangkat){
        echo " x ";
     }
    }   
}
echo "Hasil dari perkalian <br>";
echo pangkatnya($bil, $pangkat);
$hasil = pangkat($bil, $pangkat);
echo " = " . $hasil;
}
?>