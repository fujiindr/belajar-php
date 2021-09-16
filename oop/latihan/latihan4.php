<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <FORM ACTION = "" METHOD = "POST" NAME = "input">
            <tr>
                <td>Jumlah Kaki Kucing </td>
                <td> : <input type = "text" name = "kaki" required></td>
            </tr>
            <tr>
                <td>Warna Kucing </td>
                <td> : <input type = "text" name = "warna" required></td>
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
if (isset($_POST['input'])) {
    $kaki = $_POST['kaki'];
    $warna = $_POST['warna'];

    class kucing
    {
        public function __construct($kaki)
        {
            $this->kaki = $kaki;

        }

        public function kakiKucing()
        {
            if ($this->kaki > 4) {
                $a = "Siluman";
            } elseif ($this->kaki < 4) {
                $a = "Cingked";
            } else {
                $a = "Normal";
            }
            return $a;
        }
    }
    $kucing = new kucing($kaki);
    ?>
    <table>
    <tr>
        <td><?php echo "Jumlah Kaki : " . $kucing->kaki . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Info : Kucing " . $warna . " " . $kucing->kakiKucing() . "<br>"; ?> </td>
    </tr>
</table>
<?php
}
?>

