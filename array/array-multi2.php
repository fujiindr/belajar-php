<?php
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Tutor PHP dari Nol hingga Mahir",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "petanikode"
    ]
];

foreach($artikel as $post){
    echo "<h2>" . $post["judul"] . "</h2>";
    echo "<p>" . $post["penulis"] . "<p>";
    echo "<hr>";
}
?>