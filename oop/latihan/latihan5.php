<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Makhluk Tuhan</legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
            <td> Jenis Makhluk </td>
            <td> : </td>
            <td><select name="mahluk">
                <option value="Manusia">Manusia</option>
                <option value="Malaikat">Malaikat</option>
                <option value="Jin">Jin</option>
                <option value="Setan">Setan</option>
            </select></td>
            <td><input type="submit" name="pilih" value="pilih"></td>
            </tr>
        </form>
    </table>
<?php
if (isset($_POST['pilih'])) {
    $mahluk = $_POST['mahluk'];

    class hamba
    {
        public function __construct($mahluk)
        {
            $this->mahluk = $mahluk;

        }

    }
    class tugas extends hamba
    {
        public function tgs()
        {
            parent::__construct($this->mahluk);
            if ($this->mahluk == "Manusia") {
                $a = "Beribadah Kepada Tuhan";
            } elseif ($this->mahluk == "Malaikat") {
                $a = "Beribadah Kepada Tuhan";
            } elseif ($this->mahluk == "Jin") {
                $a = "Ada yang baik, ada yang jahat";
            } else {
                $a = "Menggagu Manusia agar tidak beribadah";
            }
            return $a;
        }
    }

    $hamba = new tugas($mahluk);
    ?>
    <table>
    <tr>
        <td><?php echo "Jenis Hamba : " . $hamba->mahluk . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Tugas : " . $hamba->tgs() . "<br>"; ?> </td>
    </tr>
</table>
<?php
}
?>
</fieldset>
</body>
</html>
