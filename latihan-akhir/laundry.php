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
    public function create($kode, $tanggal, $kembali, $nama, $jenis, $berat)
    {
        mysqli_query(
            $this->koneksi,
            "insert into laundry values(null,'$kode','$tanggal', '$kembali', '$nama', '$jenis', '$berat')"
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
    public function update($id, $kode, $tanggal, $kembali, $nama, $jenis, $berat)
    {
        mysqli_query(
            $this->koneksi,
            "update laundry set kode='$kode', tanggal='$tanggal', kembali='$kembali', nama='$nama', jenis='$jenis', berat='$berat' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from laundry where id='$id'");
    }
}
