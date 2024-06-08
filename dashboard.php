<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="sidebar">
        <h2>HUBUNGAN AKRAB</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="layanan.php">Jenis Layanan</a></li>
            <li><a href="transaksi.php">Transaksi</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="home-section">
        <div class="home-content">
            <div class="widget">
                <h2>Data Layanan</h2>
                <div class="grid-container">
                    <?php
                    // Include file koneksi.php
                    require_once 'koneksi.php';

                    // Query untuk mengambil data layanan
                    $layananQuery = mysqli_query($koneksi, "SELECT * FROM tb_layanan");

                    // Cek jika kueri berhasil
                    if ($layananQuery) {
                        // Loop untuk menampilkan data layanan dalam grid card
                        while ($layanan = mysqli_fetch_assoc($layananQuery)) {
                            echo '<div class="grid-item">';
                            echo '<h3>' . $layanan['jenis_layanan'] . '</h3>';
                            echo '<p>' . $layanan['deskripsi'] . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>Error fetching data from database.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="widget">
                <h2>Data Transaksi</h2>
                <div class="grid-container">
                    <?php
                    // Query untuk mengambil data transaksi
                    $transaksiQuery = mysqli_query($koneksi, "SELECT * FROM tb_transaksi");

                    // Cek jika kueri berhasil
                    if ($transaksiQuery) {
                        // Loop untuk menampilkan data transaksi dalam grid card
                        while ($transaksi = mysqli_fetch_assoc($transaksiQuery)) {
                            echo '<div class="grid-item">';
                            echo '<h3>' . $transaksi['nama'] . '</h3>';
                            echo '<p>' . $transaksi['tanggal'] . '</p>';
                            echo '<p>Rp. ' . number_format($transaksi['harga'], 0, ',', '.') . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>Error fetching data from database.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
