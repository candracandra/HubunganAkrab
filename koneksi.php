<?php
$servername = 'localhost';
$username = 'root';
$password = ''; // Jika tidak ada password, kosongkan saja
$database = 'praktikumweb';

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Mengecek koneksi
if (!$koneksi) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>

