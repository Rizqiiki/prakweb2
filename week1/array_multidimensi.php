<?php
$nama = "Prabroro";
$jurusan = "Sistem Informasi";
$semester = "8";

$nama = "Janggar";
$jurusan = "Teknik Informasi";
$semester = "9";

$nama = "Imin";
$jurusan = "Bisnis Digital";
$semester = "10";

$mahasiswas = 
[["Prabroro","SI","8"],
["Janggar","TI","9"],
["Imin","BD","10"]];

foreach ( $mahasiswas as $mahasiswas ) {
    echo "Nama : ". $mahasiswas [0] . "<br>";
    echo "Jurusan : ". $mahasiswas [1] ."<br>";
    echo "Semester : ". $mahasiswas [2]. "<br>";
    echo "<br>";
}
?>