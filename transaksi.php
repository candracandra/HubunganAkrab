<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Records</title>
    <link rel="stylesheet" href="layanan.css">
</head>
<body>
    <div class="sidebar">
        <h2>HUBUNGAN AKRAB</h2>
        <ul>
            <li><a href="dasboard.php">Dashboard</a></li>
            <li><a href="layanan.php">Jenis Layanan</a></li>
            <li><a href="transaksi.php">Transaksi</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="container">
        <h1>Transaksi</h1>
        <div class="add-button">
            <a href="tambah_transaksi.php" class="add-btn">Tambah Transaksi</a>
        </div>
        <div class="transaction-list">
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Jenis Layanan</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01-02-2024</td>
                        <td>Candra Nurcahyo</td>
                        <td>Hubungan Dengan Pelanggan</td>
                        <td>150000</td>
                        <td>
                            <a href="#" class="detail-btn">Detail</a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>06-03-2024</td>
                        <td>Risky Freemansyah</td>
                        <td>Meningkatkan Skill</td>
                        <td>150000</td>
                        <td>
                            <a href="#" class="detail-btn">Detail</a>
                          
                        </td>
                    </tr>
                    <!-- Add more transaction records as needed -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
