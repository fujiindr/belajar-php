<?php
class laundry extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datalaundry = mysqli_query($this->koneksi, "select * from laundry");
        // var_dump($datalaundry);
        return $datalaundry;
    }

    // Menambah Data
    public function create($id_karyawan, $kode_pesanan, $tanggal, $kembali, $nama, $paket, $berat)
    {
        mysqli_query(
            $this->koneksi,
            "insert into laundry values(null, '$id_karyawan,' '$kode_pesanan','$tanggal', '$kembali', '$nama', '$paket', '$berat')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datalaundry = mysqli_query(
            $this->koneksi,
            "select * from laundry where id='$id'"
        );
        return $datalaundry;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datalaundry = mysqli_query(
            $this->koneksi,
            "select * from laundry where id='$id'"
        );
        return $datalaundry;
    }
    // mengupdate data berdasarkan id
    public function update($id, $id_karyawan, $kode_pesanan, $tanggal, $kembali, $nama, $paket, $berat)
    {
        mysqli_query(
            $this->koneksi,
            "update laundry set id_karyawan = '$id_karyawan',
             kode_pesanan='$kode_pesanan', tanggal='$tanggal', kembali='$kembali', nama='$nama', paket='$paket', berat='$berat' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from laundry where id='$id'");
    }
}
