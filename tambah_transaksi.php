<?php
require_once 'koneksi.php';

// Ambil semua layanan
$sqlLayanan = "SELECT id, jenis_layanan, harga FROM tb_layanan";
$resultLayanan = mysqli_query($koneksi, $sqlLayanan);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $id = $_POST['id'];

    // Ambil harga dari tb_layanan berdasarkan id_layanan
    $sqlHarga = "SELECT harga FROM tb_layanan WHERE id = $id";
    $resultHarga = mysqli_query($koneksi, $sqlHarga);
    $rowHarga = mysqli_fetch_assoc($resultHarga);
    $harga = $rowHarga['harga'];

    $sql = "INSERT INTO tb_transaksi (tanggal, nama, id, harga) VALUES ('$tanggal', '$nama', '$id', '$harga')";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: transaksi.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="tambah_transaksi.css">
    <script>
        function updateHarga() {
            var jenisLayanan = document.getElementById("id");
            var hargaField = document.getElementById("service-price");
            var selectedOption = jenisLayanan.options[jenisLayanan.selectedIndex];
            var harga = selectedOption.getAttribute("data-harga");
            hargaField.value = harga;
        }
    </script>
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
    <div class="content">
        <h2>Tambah Transaksi</h2>
        <form action="tambah_transaksi.php" method="POST">
            <input type="date" name="tanggal" placeholder="Tanggal" required>
            <input type="text" name="nama" placeholder="Nama" required>
            <select id="id" name="id" onchange="updateHarga()" required>
                <option value="">Pilih Jenis Layanan</option>
                <?php while($layanan = mysqli_fetch_assoc($resultLayanan)): ?>
                    <option value="<?php echo $layanan['id']; ?>" data-harga="<?php echo $layanan['harga']; ?>">
                        <?php echo $layanan['jenis_layanan']; ?> - Rp<?php echo $layanan['harga']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
            <input type="hidden" id="service-price" name="harga">
            <button type="submit">Tambah Transaksi</button>
        </form>
    </div>
</body>
</html>
