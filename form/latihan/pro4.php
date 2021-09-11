<?php
if (isset($_POST ['input'])){
    $nama = $_POST ['nama'];
    $jk = $_POST ['jk'];
    $agama = $_POST ['agama'];
    $gol = $_POST ['gol'];
    $jam = $_POST ['jam'];

    $lembur = $jam - 173;
    $gajilembur = $lembur * 20000;

    function rupiah($angka){
      $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
      return $hasil_rupiah;
    }
    
    if ($gol == 1){
        $gaji = 1500000;
        $tunjangan = 150000;
    }
    else if ($gol == 2){
        $gaji = 2000000;
        $tunjangan = 200000;
    }
    else if ($gol == 3){
        $gaji = 2500000;
        $tunjangan = 250000;
    }
    else{
        $gaji = 3000000;
        $tunjangan = 300000;
    }

    $pajakgajipokok = 0.05 * $gaji;
    $pajakgajilembur = 0.05 * $gajilembur;
    $pajak = $pajakgajipokok + $pajakgajilembur;
    $gajikotor = $gaji + $tunjangan + $gajilembur;
    $hasil = $gajikotor - $pajak;

}
?>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<table style="width:100%">
  <tr>
    <th><?php echo "Nama ";?></th>
    <th><?php echo "Jenis Kelamin ";?></th> 
    <th><?php echo "Agama ";?></th>
    <th><?php echo "Golongan ";?></th>
    <th><?php echo "Jam Kerja ";?></th>
    <th><?php echo "Jam Lembur";?></th>
  </tr>
  <tr>
    <td><?php echo "$nama";?></td>
    <td><?php echo "$jk";?></td>
    <td><?php echo "$agama";?></td>
    <td><?php echo "$gol";?></td>
    <td><?php echo "$jam";?></td>
    <td><?php echo "$lembur";?></td>
  </tr>
  <tr>
    <td colspan = "6" align = center>Keuangan</td>
  </tr>
  <tr>
    <td colspan = "5" ><?php echo "Gaji Pokok";?></td>
    <td colspan = "1"><?php echo rupiah($gaji); ?></td>
  </tr>
  <tr>
    <td colspan = "5" ><?php echo "Tunjangan";?></td>
    <td colspan = "1" ><?php echo rupiah($tunjangan); ?></td>
  </tr>
  <tr>
    <td colspan = "5" ><?php echo "Gaji Lembur";?></td>
    <td colspan = "1"><?php echo rupiah($gajilembur); ?></td>
  </tr>
  <tr>
    <td colspan = "5" ><?php echo "Pajak Gaji Pokok";?></td>
    <td colspan = "1" ><?php echo rupiah($pajakgajipokok); ?></td>
  </tr>
  <tr>
    <td colspan = "5" ><?php echo "Pajak Lembur";?></td>
    <td colspan = "1" ><?php echo rupiah($pajakgajilembur); ?></td>
  </tr>
  <tr>
    <td colspan = "6" align = center >Gaji Kotor</td>
  </tr>
  <tr>
    <td colspan = "5" >(Gaji Pokok + Tunjangan + Uang Lembur)</td>
    <td colspan = "1" ><?php echo rupiah($gajikotor); ?></td>
  </tr>
  <tr>
    <td colspan = "6" align = center >Total Pajak</td>
  </tr>
  <tr>
    <td colspan = "5" >(Pajak Gaji Pokok + Pajak Lembur)</td>
    <td colspan = "1" ><?php echo rupiah($pajak); ?></td>
  </tr>
  <tr>
    <td colspan = "6" align = center >Gaji Bersih</td>
  </tr>
  <tr>
    <td colspan = "5" >(Gaji Kotor - Total Pajak)</td>
    <td colspan = "1" ><?php echo rupiah($hasil); ?></td>
  </tr>
</table>

</body>
</html>