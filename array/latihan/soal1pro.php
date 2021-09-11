<?php
if(isset($_POST['save'])){
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $indo = $_POST['indonesia'];
    $mtk = $_POST['matematika'];
    $inggris = $_POST['inggris'];
    $ipa = $_POST['ipa'];
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
                    <th>Asal Sekolah </th>
                    <th>Nilai Bahasa Indonesia </th>
                    <th>Nilai Matematika </th>
                    <th>Nilai Bahasa Inggris</th>
                    <th>Nilai Ilmu Pengetahuan Alam </th>
                    <th>Total Nilai </th>
                    <th>Keterangan </th>
                </tr>

                <?php
                $no = 1;
                for ($i = 0; $i < count($nama); $i++){ ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nama[$i]; ?></td>
                    <td><?php echo $asal[$i]; ?></td>
                    <td><?php echo $indo[$i]; ?></td>
                    <td><?php echo $mtk[$i]; ?></td>
                    <td><?php echo $inggris[$i]; ?></td>
                    <td><?php echo $ipa[$i]; ?></td>
                    <?php $total = $indo[$i] + $mtk[$i] + $inggris[$i] + $ipa[$i];
                    if ($total > 340){
                        $keterangan = "Diterima";
                    }
                    else{
                        $keterangan = "Tidak Diterima";
                     }?>
                    </td>
                    <td><?php echo $total; ?></td>
                    <td><?php echo $keterangan; ?></td>
                </tr>
                <?php
                }
            
                ?>
            </table>
        </fieldset>
    </body>
</html>