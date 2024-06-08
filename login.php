<?php
// Memulai session
session_start();

// Memeriksa jika pengguna sudah login, maka akan langsung dialihkan ke halaman dashboard
if (isset($_SESSION['username'])) {
    header('Location: dasboard.php');
    exit();
}

// Memeriksa jika ada data login yang dikirimkan
$login_error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa dan memperoleh nilai username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan proses otentikasi, misalnya dengan memeriksa ke database
    // Di sini kita akan melakukan otentikasi sederhana, yaitu jika username dan password sama, maka login berhasil
    if ($username === 'candra' && $password === '2218036') {
        // Set session untuk menyimpan status login
        $_SESSION['username'] = $username;
        // Redirect ke halaman dashboard atau halaman selanjutnya
        header('Location: dasboard.php');
        exit();
    } else {
        $login_error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="register.html">Register here</a></p>
        <?php
        // Menampilkan pesan error jika login gagal
        if ($login_error) {
            echo '<p style="color: red;">Username atau password salah.</p>';
        }
        ?>
    </form>
</div>

</body>
</html>
