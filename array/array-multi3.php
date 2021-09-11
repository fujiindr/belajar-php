<?php
$menu = [
    [
        "nama" => "Beranda",
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
]
];

foreach ($menu as $key => $val)
{
    echo $val ['nama'] . "<br>";
    echo "<ul>";
    foreach ($val['submenu'] as $menu)
    {
        echo "<li>" . $menu ['nama'] . "</li>";
        echo "<ol>";
        foreach($menu['submenu'] as $sub)
        {
            echo "<li>" . $menu['nama'] . "</li>";
        }
        echo "</ol>";
    }
    echo "</ul>";
}
?>