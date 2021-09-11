<html>
    Keterangan : 
    <?php 
    if (isset($_POST['input'])){
        $uang = $_POST['uang'];
        $pembayaran = $_POST['pembayaran'];

        function rupiah($angka){
            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
            return $hasil_rupiah;
          }
        if ($uang == $pembayaran){
            echo "Uang Anda Pas ";
            echo "Terimakasih Sudah Mempercayai Rental Kami ";
        }
        else if ($uang >= $pembayaran){
            $hasil = $uang - $pembayaran;
            echo "Uang Kembalian Anda ";
            echo rupiah($hasil);
            echo ", Terimakasih Sudah Mempercayai Rental Kami ";
        }
        else {
            $hasil = $uang - $pembayaran;
            echo "Uang Anda Kurang Kami Blacklist Nama Anda ";
        }
    }
    ?>
</html>