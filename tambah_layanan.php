<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Layanan</title>
    <link rel="stylesheet" href="tambah_layanan.css">
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>HUBUNGAN AKRAB</h2>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="layanan.php">Jenis Layanan</a></li>
                <li><a href="transaksi.php">Transaksi</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h2>Tambah Layanan</h2>
            <div class="crud-section">
                <form action="layanan_proses.php" method="POST" id="service-form">
                    <input type="text" name="jenis_layanan" placeholder="Jenis Layanan" required>
                    <textarea name="deskripsi" placeholder="Deskripsi" required></textarea>
                    <input type="number" name="harga" placeholder="Harga" required>
                    <button type="submit" name="add">Tambah Layanan</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
