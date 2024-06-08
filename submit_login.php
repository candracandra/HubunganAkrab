<?php
// Memeriksa apakah form login telah dikirimkan
if (isset($_POST['login'])) {
    // Mengambil nilai username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan proses otentikasi, misalnya dengan memeriksa ke database
    // Di sini kita akan melakukan otentikasi sederhana, yaitu jika username dan password sama, maka login berhasil
    if ($username === 'user' && $password === 'password') {
        // Set cookie untuk menyimpan status login
        setcookie('user_login', true, time() + (86400 * 30), '/'); // Cookie akan berakhir dalam 30 hari
        // Redirect ke halaman dashboard atau halaman selanjutnya
        header('Location: dashboard.php');
        exit();
    } else {
        echo 'Login gagal. Silakan coba lagi.';
    }
}
?>
