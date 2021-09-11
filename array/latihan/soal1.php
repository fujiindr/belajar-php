<html>
    <head>
        <title>Input Data Array</title>
    </head>
    <body>
        <fieldset>
            <legend>Input Array</legend>
            <form action="" method = "POST">
                <table>
                    <tr>
                        <th>Masukan Jumlah Data </th>
                        <td> : <input type = "number" name = "jumlah" required></td>
                    </tr>
                    <tr>
                        <th>
                        <td>
                        <button type = "submit" name = "simpan">Simpan</button>
                            <button type = "reset">Reset</button>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <?php
            if(isset($_POST['simpan']))
            {
                $row = $_POST['jumlah'];
        ?>
        <fieldset>
            <legend>Input Data Siswa</legend>
            <table>
                <form action="soal1pro.php" method = "post">
                <?php
                for ($i = 1; $i <= $row; $i++)
                {    
                ?>
                <tr>
                <tr>
                    <th colspan = "2">Data ke-<?php echo $i;?></th>
                    <td>Nama</td>
                    <td><input type = "text" name = "nama[]" required></td>
                </tr>
                <tr>
                    <th colspan = "2"></th>
                    <td>Asal Sekolah</td>
                    <td><input type = "text" name = "asal[]" required></td>
                </tr>
                <tr>
                    <th colspan = "2"></th>
                    <td>Nilai Bahasa Indonesia</td>
                    <td><input type = "number" name = "indonesia[]" min = "1" max = "100" required></td>
                </tr>
                <tr>
                    <th colspan = "2"></th>
                    <td>Nilai Matematika</td>
                    <td><input type = "number" name = "matematika[]" min = "1" max = "100" required></td>
                </tr>
                <tr>
                    <th colspan = "2"></th>
                    <td>Nilai Bahasa Inggris</td>
                    <td><input type = "number" name = "inggris[]" min = "1" max = "100" required></td>
                </tr>
                <tr>
                    <th colspan = "2"></th>
                    <td>Nilai Ilmu Pengetahuan Alam</td>
                    <td><input type = "number" name = "ipa[]" min = "1" max = "100" required></td>
                </tr>
                </tr>
                <?php
                }
                ?><tr>
                    <th></th>
                    <td><button type = "submit" name = "save">Simpan</button></td>
                </tr>
                </form>
            </table>
        </fieldset>
                <?php
                }
                ?>
    </body>
</html>