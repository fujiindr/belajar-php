<?php
$data = [
    [
        "mahasiswa" => "Fuji",
        "matakuliah" => [
            ["nama" => "Rpl"],
            ["nama" => "Database"],
            ["nama" => "OOP"]
        ],
        "hobi" =>[
            ["hobi" => "Memasak"],
            ["hobi" => "Membaca"],
        ],
        "namadosen" => "Aceng Fikri",
    ],
    [
        "mahasiswa" => "Indah",
        "matakuliah" => [
            ["nama" => "Fifika"],
            ["nama" => "Kimia"],
            ["nama" => "Biologi"]
        ],
        "hobi" =>[
            ["hobi" => "Menulis"],
            ["hobi" => "Menari"],
        ],
        "namadosen" => "Aceng Fikri",
    ],
    [
        "mahasiswa" => "Rahayu",
        "matakuliah" => [
            ["nama" => "Matematika"],
            ["nama" => "Astronomi"],
            ["nama" => "Biografi"]
        ],
        "hobi" =>[
            ["hobi" => "Voli"],
            ["hobi" => "Sepak Bola"],
        ],
        "namadosen" => "Aceng Fikri",
    ],
    [
        "mahasiswa" => "A",
        "matakuliah" => [
            ["nama" => "PKN"],
            ["nama" => "KWU"],
            ["nama" => "IPS"]
        ],
        "hobi" =>[
            ["hobi" => "Badminton"],
            ["hobi" => "Renang"],
        ],
        "namadosen" => "Ujang Betok",
    ],
    [
        "mahasiswa" => "B",
        "matakuliah" => [
            ["nama" => "Sastara Indonesia"],
            ["nama" => "Sastara Inggris"],
            ["nama" => "Sastara Jerman"]
        ],
        "hobi" =>[
            ["hobi" => "Tenis Meja"],
            ["hobi" => "Menonton"],
        ],
        "namadosen" => "Ujang Betok",
    ],
    [
        "mahasiswa" => "C",
        "matakuliah" => [
            ["nama" => "Kimia"],
            ["nama" => "IPA"],
            ["nama" => "Matematika"]
        ],
        "hobi" =>[
            ["hobi" => "Lari"],
            ["hobi" => "Mendengarkan Musik"],
        ],
        "namadosen" => "Ujang Betok",
    ],
];
?>

<html>
    <table border = "1" width = "100%">
    <tr> 
        <th> <?php echo "No";?></th>
        <th> <?php echo "Nama Mahasiswa";?></th>
        <th> <?php echo "Nama Dosen";?></th>
        <th> <?php echo "Mata Kuliah";?></th>
        <th> <?php echo "Hobi";?></th>
    </tr>
<?php
$no = 1;
foreach ($data as $mahasiswa)
{
?>
    <tr>
        <td> <?php echo $no++;?></td>
        <td> <?php echo $mahasiswa ['mahasiswa'] . "<br>" ;?></td>
        <td>
        <?php echo $mahasiswa ['namadosen'] . "<br>";?>
        </td>
    <td>
    <?php
    foreach ($mahasiswa['matakuliah'] as $matkul)
    {   
    ?>
        <li> <?php echo " ".$matkul ['nama'];?></li>
    <?php
    }
    ?>
    </td>
    <td>
    <?php    
    foreach ($mahasiswa['hobi'] as $hobi)
    {
    ?>
        <li> <?php echo " ".$hobi ['hobi'];?></li>
    <?php    
    }
}
?>
    </td>
</tr>

</table>
</html>