<?php
if(isset($_POST['save'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    
    //mengecek data
    /*echo "<pre>";
    var_dump($nama);
    echo "</pre>";*/
}
?>
<html>
    <body>
        <fieldset>
            <legend>Data Siswa</legend>
            <table border = 1>
                <tr>
                    <th>Nomor </th>
                    <th>Nama </th>
                    <th>Kelas </th>
                </tr>

                <?php
                $no = 1;
                for ($i = 0; $i < count($nama); $i++){ ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nama[$i]; ?></td>
                    <td><?php echo $kelas[$i]; ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </fieldset>
    </body>
</html>