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
        <legend>Pembayaran Gofood</legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
                <td>Nama Barang </td>
                <td> : <input type = "text" name = "barang" required></td>
            </tr>
            <tr>
                <td>Harga </td>
                <td> : <input type = "text" name = "harga" required></td>
            </tr>
            <tr>
                <td>Jumlah Pesanan </td>
                <td> : <input type = "number" name = "pesanan" min = "1" max = "100" required></td>
            </tr>
            <tr>
            <td> Sistem Pembayaran </td>
            <td> :
                <select name="pembayaran">
                <option value="Cash">Cash</option>
                <option value="M-Banking">M-Banking</option>
                <option value="Gopay">Gopay</option>
                <option value="PickUp">PickUp</option>
            </select></td>
            </tr>
            <tr>
            <td><input type="submit" name="pilih" value="Bayar">
            <input type="reset" value="Reset"></td>
            </tr>
        </form>
    </table>
    <hr>
<?php
if (isset($_POST['pilih'])) {
    $barang = $_POST['barang'];
    $harga_barang = $_POST['harga'];
    $pesanan = $_POST['pesanan'];
    $pembayaran = $_POST['pembayaran'];
    $total = $harga_barang * $pesanan;
    $diskon = 0;

    class a
    {
        public function rupiah($angka)
        {
            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
            return $hasil_rupiah;
        }

        public function __construct($total, $pembayaran)
        {
            $this->total = $total;
            $this->pembayaran = $pembayaran;
        }

        public function getdiskon()
        {
            if ($this->total >= 250000) {
                $getdiskon = $this->total * 0.15;
            } elseif ($this->total >= 150000) {
                $getdiskon = $this->total * 0.1;
            } else {
                $getdiskon = 0;
            }
            return $getdiskon;
        }

    }

    class bayar extends a
    {
        public function cashBack()
        {
            if ($this->pembayaran == "M-Banking") {
                $cash_back = $this->total * 0.25;
            } elseif ($this->pembayaran == "Gopay") {
                $cash_back = $this->total * 0.1;
            } elseif ($this->pembayaran == "PickUp") {
                $cash_back = $this->total * 0.015;
            } else {
                $cash_back = 0;
            }
            return $cash_back;
        }
        public function total()
        {
            $hasil = $this->total - $this->getdiskon();
            $a = $hasil - $this->cashBack();
            return $a;
        }
    }
    $bayar = new bayar($total, $pembayaran);

    ?>
    <table>
    <tr>
        <td>Nama Barang</td>
        <td> : <?php echo $barang . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Harga Barang</td>
        <td> : <?php echo $bayar->rupiah($harga_barang) . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Jumlah Pesanan</td>
        <td> : <?php echo $pesanan . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Jenis Pembayaran</td>
        <td> : <?php echo $pembayaran . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Total Harga</td>
        <td> : <?php echo $bayar->rupiah($total) . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td> : <?php echo "Rp " . $bayar->getdiskon() . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Cashback</td>
        <td> : <?php echo "Rp " . $bayar->cashBack() . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Jumlah Yang Harus Dibayar</td>
        <td> : <?php echo "Rp " . $bayar->total() . "<br>"; ?> </td>
    </tr>
</table>
<?php
}
?>

</fieldset>
</body>
</html>
