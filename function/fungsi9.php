<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "submenu" => [
            [
                "nama" => "Olahraga",
                "submenu" => [
                    [
                        "nama" => "Bola"
                    ],
                    [
                        "nama" => "Bulu Tangkis"
                    ],
            ]
            ],
        [
            "nama" => "Politk",
            "submenu" => [
                [
                    "nama" => "Partai Banteng"
                ],
                [
                    "nama" => "Ekonomi"
                ]
            ]
        ],
        [
            "nama" => "Manca Negara",
            "submenu" => [
                [
                    "nama" => "International"
                ],
                [
                    "nama" => "World"
                ]
            ]
        ]
    ]
],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]

];

function tampilkanMenuBertingkat (array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item){
        echo "<li>{$item['nama']}</li>";
        if (@$item['submenu'] && count ($item['submenu'])){
            tampilkanMenuBertingkat($item['submenu']);
        }
    }
    echo "</ul>";
}
tampilkanMenuBertingkat($menu);
?>