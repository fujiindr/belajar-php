<?php
if (isset($_POST ['simpan'])){
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
    $tglkembali = $_POST ['tglkembali'];

    function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
      }

      if ($supir == "ya"){
          $gaji = 275000;
      }
      else{
          $gaji = 150000;
      }

    $date11 = date_create("$pinjam");
    $date22 = date_create("$kembali");

    $difff = date_diff($date11, $date22);

    $date1 = date_create("$kembali");
    $date2 = date_create("$tglkembali");

    $diff = date_diff($date2, $date1);
    
    $denda = 240000;

    $totalbiaya = $difff->format("%a") * $gaji; 
    $totaldenda = $diff->format("%a") * $denda;
    $pembayaran = $totalbiaya + $totaldenda;

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
<fieldset>

    <legend><h2>Hitung Biaya Peminjaman Mobil</h2></legend>
    <center>
        <img src="logo.png" alt="Trulli" width="250" height="220">
    </center>

<table style="width:100%">

    <tr>
        <th colspan = "7" align = center>Data Diri</th>
    </tr>

    <tr>
        <th colspan = "2">Nama </th>
        <th colspan = "2">Nomor Induk Keluarga </th> 
        <th>Jenis Kelamin</th>
        <th>Agama </th>
        <th>Penjamin</th>
    </tr>

    <tr>
        <td colspan = "2"><?php echo "$nama";?></td>
        <td colspan = "2"><?php echo "$nik";?></td>
        <td><?php echo "$jk";?></td>
        <td><?php echo "$agama";?></td>
        <td><?php echo "$penjamin";?></td>
    </tr>

    <tr>
        <th colspan = "7" align = center>Data Rental Mobil</th>
    </tr>

    <tr>
        <th>Nama Mobil </th>
        <th>Jenis Mobil </th> 
        <th>Merk Mobil</th>
        <th>Tanggal Pinjam </th>
        <th>Tanggal Kembali</th>
        <th>Tanggal Verifikasi Kembali</th>
        <th>Menggunakan Supir</th>
    </tr>

    <tr>
        <td><?php echo "$mobil";?></td>
        <td><?php echo "$jm";?></td>
        <td><?php echo "$merek";?></td>
        <td><?php echo "$pinjam";?></td>
        <td><?php echo "$kembali";?></td>
        <td><?php echo "$tglkembali";?></td>
        <td><?php echo "$supir";?></td>
    </tr>

    <tr>
        <th colspan = "7" align = center>Rincian Biaya</th>
    </tr>

    <tr>
    <td colspan = "6">Lama Pinjaman</td>
    <td colspan = "1"><?php echo $difff->format("%a Hari");?></td>
    </tr>

    <tr>
    <td colspan = "6" >Biaya Harian</td>
    <td colspan = "1" ><?php echo rupiah($gaji);?></td>
    </tr>

    <tr>
    <td colspan = "6" >Telat mengembalikan</td>
    <td colspan = "1"><?php echo $diff->format("%a Hari");?></td>
    </tr>
    
    <tr>
    <td colspan = "6" >Denda Harian</td>
    <td colspan = "1" ><?php echo rupiah($denda);?></td>
    </tr>

    <tr>
    <th colspan = "7" align = center >Total Biaya</th>
    </tr>

    <tr>
    <td colspan = "6" >Total Biaya (Lama Pinjaman * Biaya Harian)</td>
    <td colspan = "1" ><?php echo rupiah($totalbiaya);?></td>
    </tr>

    <tr>
    <td colspan = "6" >Total Denda (Telat Mengembalikan * Biaya Denda)</td>
    <td colspan = "1" ><?php echo rupiah($totaldenda);?></td>
    </tr>

    <tr>
    <th colspan = "7" align = center >Pembayaran</th>
    </tr>

    <tr>
    <td colspan = "6" >Total Pembayaran (Total Biaya + Total Denda)</td>
    <td colspan = "1" ><?php echo rupiah($pembayaran);?></td>
    </tr>
    </table>
            
    <FORM ACTION = "lat4.php" METHOD = "POST" NAME = "input">
    <br>
        Masukan Uang Pembayaran :
        <input type = "text" name = "uang" required>
        <input type = "hidden" name = "pembayaran" value ="<?php echo "$pembayaran";?>">
        <input type = "submit" name = "input" value = "Bayar"><br>
        
</fieldset>
</form>
</body>
</html>
