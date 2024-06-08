<?php
require_once 'koneksi.php';

function fetchLayanan() {
    global $koneksi;
    $sql = "SELECT * FROM tb_layanan";
    return mysqli_query($koneksi, $sql);
}
$layanans = fetchLayanan();
?>

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
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="layanan.php">Jenis Layanan</a></li>
            <li><a href="transaksi.php">Transaksi</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="container">
        <h1>Layanan</h1>
        <div class="add-button">
            <a href="tambah_layanan.php" class="add-btn">Tambah Data</a>
        </div>
        <div class="transaction-list">
            <table>
                <thead>
                    <tr>
                        <th>Jenis Layanan</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($layanan = mysqli_fetch_assoc($layanans)): ?>
                    <tr>
                        <td><?php echo $layanan['jenis_layanan']; ?></td>
                        <td><?php echo $layanan['deskripsi']; ?></td>
                        <td><?php echo $layanan['harga']; ?></td>
                        <td>
                            <a href="edit_layanan.php?id=<?php echo $layanan['id']; ?>" class="edit-btn">Edit</a>
                            <form action="layanan_proses.php" method="POST" style="display:inline-block;">
                                <input type="hidden" name="id" value="<?php echo $layanan['id']; ?>">
                                <button type="submit" name="delete" class="delete-btn">Hapus</button>
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


