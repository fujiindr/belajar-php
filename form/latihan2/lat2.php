<?php
if (isset($_POST ['input'])){
    $nama = $_POST ['nama'];
    $nik = $_POST ['nik'];
    $jk = $_POST ['jk'];
    $agama = $_POST ['agama'];
    $mobil = $_POST ['mobil'];
    $jm = $_POST ['jm'];
    $merek = $_POST ['merek'];
    $no = $_POST ['no'];
    $pinjam = $_POST ['pinjam'];
    $kembali = $_POST ['kembali'];
    $penjamin = $_POST ['penjamin'];
    $supir = $_POST ['supir'];

}
?>

<html>
    <body>
        <FORM ACTION = "lat3.php" METHOD = "POST" NAME = "input">
        <fieldset>
        <legend><h2>Verifikasi Peminjaman</h2></legend>
            <table>

            <tr>
            <td><input type = "hidden" name = "nama" value ="<?php echo "$nama";?>"> </td>
            <td><input type = "hidden" name = "nik" value ="<?php echo "$nik";?>"> </td>
            <td><input type = "hidden" name = "jk" value = "<?php echo "$jk";?>"> </td>
            <td><input type = "hidden" name = "agama" value = "<?php echo "$agama";?>"> </td>
            <td><input type = "hidden" name = "mobil" value = "<?php echo "$mobil";?>"> </td>
            <td><input type = "hidden" name = "jm" value = "<?php echo "$jm";?>"> </td>
            <td><input type = "hidden" name = "merek" value = "<?php echo "$merek";?>"> </td>
            <td><input type = "hidden" name = "no" value = "<?php echo "$no";?>"> </td>
            <td><input type = "hidden" name = "pinjam" value = "<?php echo "$pinjam";?>"> </td>
            <td><input type = "hidden" name = "kembali" value = "<?php echo "$kembali";?>"> </td>
            <td><input type = "hidden" name = "penjamin" value = "<?php echo "$penjamin";?>"> </td>
            <td><input type = "hidden" name = "supir" value = "<?php echo "$supir";?>"> </td>
            </tr>

            <tr>
            <td>Tanggal Kembali </td>
            <td> :</td>
            <td><input type="date" name = "tglkembali" required></td>
            </tr>

            <tr>
            <td><input type = "submit" name = "simpan" value = "Save">
            <input type = "reset" name = "reset" value = "Reset"></td>
            </tr>
            </table>
        </fieldset>
        </FORM>
    </body>
</html>