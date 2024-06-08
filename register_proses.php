<?php
session_start();
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        // Menggunakan password_hash untuk mengenkripsi password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tb_admin (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        if (mysqli_query($koneksi, $sql) === TRUE) {
            header('Location: login.php?register=success');
            exit();
        } else {
            header('Location: register.php?error=Error registering user');
            exit();
        }
    } else {
        header('Location: register.php?error=Passwords do not match');
        exit();
    }
}
?>
