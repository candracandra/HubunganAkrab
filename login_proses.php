<?php
session_start();
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_admin WHERE username='$username'";
    $result = mysqli_query($koneksi, $sql);

    if ($result->num_rows == 1) {
        $row = mysqli_fetch_assoc($result);
        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit();
        } else {
            header('Location: login.php?error=Invalid username or password');
            exit();
        }
    } else {
        header('Location: login.php?error=Invalid username or password');
        exit();
    }
}
?>
