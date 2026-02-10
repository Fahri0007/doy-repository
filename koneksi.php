<?php
//variabell host brisi almt server DB
$host = "localhost";

//variable user brisi usernme MySQL
$user = "root";

//variabel pass brisi passrod MySQL
$pass = "";

//variable namadb brisi nama databse yang digunakan
$namadb = "db_tugas";

//membuat konksi ke db MySQL
$koneksi = mysqli_connect($host, $user, $pass, $namadb);

//mngcek apkah kneksi brhasi atau ggal
if (!$koneksi) {
    die ("Koneksi database gagall: " . mysqli_connect_error());
}

?>