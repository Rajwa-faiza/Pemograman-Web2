<?php 
// ini sebuah komentar 
/* ini juga sebuah komentar (untuk komentar lebih dari 1 baris) */
# ini komentar pake kres 
// untuk shortcutnya menggunakan ctrl+/

// echo "Hello World <br>";
// echo 'Hello World <br>';
// print_r("Rajwa Faiza <br>");
// var_dump("STT Nurul Fikri <br>");


// Membuat variabel User 
$nama = "Rajwa Faiza";
$umur = 18;
$berat = 70.2;
$mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya $umur <br>";
// echo "Berat badan saya mencapai $berat kg";

// Membuat variabel Sistem 
// echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File '.$_SERVER["PHP_SELF"];

// Membuat variabel Konstanta 
define('PHI', 3.14); 
$jari = 10;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari = $luas <br>";
// echo "Keliling lingkaran dengan jari-jari $jari = $keliling";

// Membuat Array
$programs = ["PHP", "Javascript", "HTML", "CSS"];
//echo $programs[0]; 
// echo "Jumlah data variable programs sebanyak " . count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";
}



?>