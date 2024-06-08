<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="logout.css">
</head>
<body>
    <div class="sidebar">
        <h2>HUBUNGAN AKRAB</h2>
        <ul>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="layanan.html">Jenis Layanan</a></li>
            <li><a href="transaksi.html">Transaksi</a></li>
            <li><a id="logoutBtn" href="#">Logout</a></li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Admin</span>
            </div>
        </nav>
    </section>
    <script>
        // Tambahkan event listener untuk logout button
        document.getElementById("logoutBtn").addEventListener("click", function() {
            // Handle logout di sini
            alert("Anda telah logout.");
        });
    </script>

<?php
// Memulai session
session_start();

// Menghapus semua data session
session_unset();
session_destroy();

// Mengarahkan kembali ke halaman login
header('Location: login.php');
exit();
?>


</body>
</html>
