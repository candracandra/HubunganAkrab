<?php
// Memeriksa jika ada data register yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa dan memperoleh nilai dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Lakukan proses validasi register di sini
    // Misalnya, memeriksa apakah username atau email sudah digunakan sebelumnya, dan lain sebagainya

    // Setelah validasi berhasil, Anda bisa melakukan proses penyimpanan data ke database, atau lainnya

    // Untuk contoh sederhana, kita hanya menampilkan data yang di-submit
    echo "<h2>Data yang di-submit:</h2>";
    echo "<p>Username: $username</p>";
    echo "<p>Email: $email</p>";
    // Jangan pernah menampilkan password dalam bentuk teks biasa, ini hanya untuk contoh
    echo "<p>Password: $password</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h2>Register</h2>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit">Register</button>
        <p>Sudah Punya Akun ? <a href="login.html"> Login Disini </a></p>
    </form>
</div>

</body>
</html>
