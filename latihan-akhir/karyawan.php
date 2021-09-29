<?php
class karyawan extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datakaryawan = mysqli_query($this->koneksi, "select * from karyawan");
        // var_dump($datakaryawan);
        return $datakaryawan;
    }

    // Menambah Data
    public function create($nama_karyawan)
    {
        mysqli_query(
            $this->koneksi,
            "insert into karyawan values(null, '$nama_karyawan')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id_karyawan)
    {
        $datakaryawan = mysqli_query(
            $this->koneksi,
            "select * from karyawan where id_karyawan='$id_karyawan'"
        );
        return $datakaryawan;
    }

    // Menampilkan data berdasarkan id_karyawan
    public function edit($id_karyawan)
    {
        $datakaryawan = mysqli_query(
            $this->koneksi,
            "select * from karyawan where id_karyawan='$id_karyawan'"
        );
        return $datakaryawan;
    }
    // mengupdate data berdasarkan id_karyawan
    public function update($id_karyawan, $nama_karyawan)
    {
        mysqli_query(
            $this->koneksi,
            "update karyawan set nama_karyawan='$nama_karyawan'where id_karyawan='$id_karyawan'"
        );
    }

    // menghapus data berdasarkan id_karyawan
    public function delete($id_karyawan)
    {
        mysqli_query($this->koneksi, "delete from karyawan where id_karyawan='$id_karyawan'");
    }
}

