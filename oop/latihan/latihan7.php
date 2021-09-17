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
                <select name="bayar">
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
    $harga = $_POST['harga'];
    $pesanan = $_POST['pesanan'];
    $pembayaran = $_POST['pembayaran'];

    function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }
    class pembayaran
    {
        public function __construct($pembayaran)
        {
            $this->pembayaran = $pembayaran;
        }

    }
    class bayar extends pembayaran
    {
        public function a()
        {
            parent::__construct($this->pembayaran);
            if ($this->pembayaran >= 250000) {
                $getdiskon = "Diskon 15%";
            } elseif ($this->pembayaran >= 150000) {
                $getdiskon = "Diskon 10%";
            } else {
                $getdiskon = "Tidak Mendapatkan Diskon";
            }
            return $getdiskon;
        }
    }
    ?>
<?php
}
?>

</fieldset>
</body>
</html>
