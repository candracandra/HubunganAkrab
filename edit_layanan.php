<?php
require_once 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tb_layanan WHERE id=$id";
$result = mysqli_query($koneksi, $sql);
$layanan = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis_layanan = $_POST['jenis_layanan'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $sql = "UPDATE tb_layanan SET jenis_layanan='$jenis_layanan', deskripsi='$deskripsi', harga='$harga' WHERE id=$id";
    if (mysqli_query($koneksi, $sql) === TRUE) {
        header('Location: layanan.php');
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Layanan</title>
    <link rel="stylesheet" href="tambah_layanan.css">
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
        <h2>Edit Layanan</h2>
        <div class="crud-section">
            <form action="" method="POST">
                <input type="text" name="jenis_layanan" placeholder="Jenis Layanan" value="<?php echo $layanan['jenis_layanan']; ?>" required>
                <textarea name="deskripsi" placeholder="Deskripsi" required><?php echo $layanan['deskripsi']; ?></textarea>
                <input type="number" name="harga" placeholder="Harga" value="<?php echo $layanan['harga']; ?>" required>
                <button type="submit" name="update">Update Layanan</button>
            </form>
        </div>
    </div>

</body>

</html>
