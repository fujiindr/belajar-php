<html>
    <body>
        <FORM ACTION = "" METHOD = "POST" NAME = "input">
            <table>
                <tr>
                    <td>Nama </td>
                    <td> : <input type = "text" name = "nama" required></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin </td>
                    <td> : 
                        <input type = "radio" name = "jk" value = "Laki - laki" checked>
                        Laki - laki
                        <input type = "radio" name = "jk" value = "Perempuan">
                        Perempuan </td>
                </tr>

                <tr>
                    <td>Tanggal Lahir </td>
                    <td> : <input type = "date" name = "lahir" required></td>
                </tr>

                <tr>
                    <td>Agama </td>
                    <td> : 
                        <select name = "agama">
                        <option value = " "></option>
                            <option value = "Islam">Islam</option>
                            <option value = "Protestan">Protestan</option>
                            <option value = "Katolik">Katolik</option>
                            <option value = "Hindu">Hindu</option>
                            <option value = "Budha">Budha</option>
                            <option value = "Konghucu">Konghucu</option>
                        </select></td>
                </tr>

                <tr>
                    <td>Alamat </td>
                    <td> <Textarea name = "alamat" cols = "15" rows = "2" required></textarea></td>
                </tr>
           
                <tr>
                    <td>Hobi </td>
                    <td><input type = "checkbox" name = "hobi[]" value = "Memasak" checked> Memasak  
                        <input type = "checkbox" name = "hobi[]" value = "Mancing"> Mancing
                        <input type = "checkbox" name = "hobi[]" value = "Menulis"> Menulis <br>
                        <input type = "checkbox" name = "hobi[]" value = "Membaca"> Membaca 
                        <input type = "checkbox" name = "hobi[]" value = "Menonton Film"> Menonton Film 
                        <input type = "checkbox" name = "hobi[]" value = "Olahraga"> Olahraga
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type = "submit" name = "input" value = "Input">
                        <input type = "reset" name = "reset" value = "Reset">
                    </td>
                </tr>
        </table>
        <hr>
        <hr>
        
        </FORM>
    </body>
</html>

<?php
            if (isset($_POST ['input'])){
                $nama = $_POST ['nama'];
                $jk = $_POST ['jk'];
                $lahir = $_POST ['lahir'];
                $agama = $_POST ['agama'];
                $alamat = $_POST ['alamat'];
                $hobi = $_POST ['hobi'];
                
                function biodata($nama, $jk, $lahir, $agama, $alamat, $hobi)
                {
                    echo "Nama : $nama<br>";
                    echo "Jenis Kelamin : $jk<br>";
                    echo "TTL : $lahir<br>";
                    echo "Agama : $agama<br>";
                    echo "Alamat : $alamat<br>";
                    echo "Hobi : ";
                    foreach ($hobi as $a){
                        echo "<li>" . $a . "</li>";
                    }
                }
                echo biodata($_POST ['nama'], $_POST ['jk'], $_POST ['lahir'],
                $_POST ['agama'], $_POST ['alamat'], $hobi);
            }
        ?>