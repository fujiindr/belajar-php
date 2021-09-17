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
        <legend>Mahasiswa</legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
                <td>Nama Mahasiswa </td>
                <td> : <input type = "text" name = "nama" required></td>
            </tr>
            <tr>
                <td>NIM </td>
                <td> : <input type = "text" name = "nim" required></td>
            </tr>
            <tr>
                <td>Nilai </td>
                <td> : <input type = "number" name = "nilai" min = "1" max = "100" required></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td> : <input type = "text" name = "dosen" required></td>
            </tr>
            <tr>
                <td>Mata Kuliah </td>
                <td> : <input type = "text" name = "matkul" required></td>
            </tr>
            <tr>
            <td><input type="submit" name="pilih" value="Pilih">
            <input type="reset" value="Reset"></td>
            </tr>
        </form>
    </table>
    <hr>
    <?php
if (isset($_POST['pilih'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];

    class mahasiswa
    {
        public function __construct($nilai)
        {
            $this->nilai = $nilai;
        }

    }
    class dosen extends mahasiswa
    {
        public function grade()
        {
            parent::__construct($this->nilai);
            if ($this->nilai >= 85) {
                $grade = "A";
            } elseif ($this->nilai >= 75) {
                $grade = "B";
            } elseif ($this->nilai >= 65) {
                $grade = "C";
            } else {
                $grade = "D";
            }
            return $grade;
        }
        public function Status()
        {
            parent::__construct($this->nilai);
            if ($this->nilai >= 75) {
                $status = "Lulus";
            } elseif ($this->nilai >= 65) {
                $status = "Perbaikan";
            } else {
                $status = "Tidak Lulus";
            }
            return $status;
        }

    }
    $mahasiswa = new dosen($nilai);
    ?>
    <table>
    <tr>
        <td><?php echo "Nama Mahasiswa : " . $nama . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "NIM : " . $nim . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Nilai : " . $mahasiswa->nilai . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Nama Dosen : " . $dosen . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Mata Kuliah : " . $matkul . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Grade : " . $mahasiswa->grade() . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Status : " . $mahasiswa->status() . "<br>"; ?> </td>
    </tr>
</table>
<?php
}
?>
</fieldset>
</body>
</html>

