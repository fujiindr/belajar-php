<?php
$data = [
    [
        "namadosen" => "Aceng Fikri",
        "mahasiswa" => [
            [
                "nama" => "Fuji",
                "matakuliah" => [
                    ["nama" => "Rpl"],
                    ["nama" => "Database"],
                    ["nama" => "OOP"]
                ],
                "hobi" =>[
                    ["hobi" => "Memasak"],
                    ["hobi" => "Membaca"],
                ]
            ],
            [
                "nama" => "Indah",
                "matakuliah" => [
                    ["nama" => "Fifika"],
                    ["nama" => "Kimia"],
                    ["nama" => "Biologi"]
                ],
                "hobi" =>[
                    ["hobi" => "Menulis"],
                    ["hobi" => "Menari"],
                ]
            ],
            [
                "nama" => "Rahayu",
                "matakuliah" => [
                    ["nama" => "Matematika"],
                    ["nama" => "Astronomi"],
                    ["nama" => "Biografi"]
                ],
                "hobi" =>[
                    ["hobi" => "Voli"],
                    ["hobi" => "Sepak Bola"],
                ]
            ],
    ],
],
    [
    "namadosen" => "Ujang Betok",
    "mahasiswa" => [
        [
            "nama" => "A",
            "matakuliah" => [
                ["nama" => "PKN"],
                ["nama" => "KWU"],
                ["nama" => "IPS"]
            ],
            "hobi" =>[
                ["hobi" => "Badminton"],
                ["hobi" => "Renang"],
            ]
        ],
        [
            "nama" => "B",
            "matakuliah" => [
                ["nama" => "Sastara Indonesia"],
                ["nama" => "Sastara Inggris"],
                ["nama" => "Sastara Jerman"]
            ],
            "hobi" =>[
                ["hobi" => "Tenis Meja"],
                ["hobi" => "Menonton"],
            ]
        ],
        [
            "nama" => "C",
            "matakuliah" => [
                ["nama" => "Kimia"],
                ["nama" => "IPA"],
                ["nama" => "Matematika"]
            ],
            "hobi" =>[
                ["hobi" => "Lari"],
                ["hobi" => "Mendengarkan Musik"],
            ]
        ],
    ]
]
];
$no = 1;
foreach ($data as $val)
{
    echo "Nama Dosen : " . $val ['namadosen'] . "<br>";
    echo "Daftar Mahasiswa :";
    echo "<ul>";
    
    foreach ($val['mahasiswa'] as $data)
    {   
        echo "<li> Data ke-" . $no++ . "<br>";
        echo " Nama Mahasiswa : " . $data ['nama'] . "<br>" ;
        echo "Daftar Mata Kuliah : ";
        echo "<ol>";
        foreach($data['matakuliah'] as $matkul)
        {
            
            echo "<li>" . $matkul['nama'] . "</li>";
        }
        echo "</ol>";
        
        echo "Daftar Hobi: ";
        echo "<ol>";
        foreach($data['hobi'] as $hobi)
        {
            
            echo "<li>" . $hobi ['hobi'] . "</li>";
        }
        echo "</ol>";
    }
    echo "</ul>";
}
?>