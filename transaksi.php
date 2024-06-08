<?php
require_once 'koneksi.php';
require_once 'transaksi_proses.php';

// Ambil semua transaksi dengan join ke tabel layanan
$semuaTransaksi = semuaTransaksi();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Records</title>
    <link rel="stylesheet" href="transaksi.css">
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

    <div class="container">
        <h1>Transaksi</h1>
        <div class="add-button">
            <a href="tambah_transaksi.php" class="add-btn">Tambah Transaksi</a>
        <a href="cetak_transaksi.php" class="print-btn">Cetak PDF</a>
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
                    <?php while($transaksi = mysqli_fetch_assoc($semuaTransaksi)): ?>
                    <tr>
                        <td><?php echo $transaksi['tanggal']; ?></td>
                        <td><?php echo $transaksi['nama']; ?></td>
                        <td><?php echo $transaksi['jenis_layanan']; ?></td>
                        <td><?php echo $transaksi['harga']; ?></td>
                        <td>
                            <form action="transaksi_proses.php" method="POST" style="display:inline-block;">
                                <input type="hidden" name="id_transaksi" value="<?php echo $transaksi['id_transaksi']; ?>">
                                <button type="submit" name="hapus" class="delete-btn">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
