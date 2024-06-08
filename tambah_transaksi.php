<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="tambah_transaksi.css">
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

    <div class="content">
        <h2>Welcome, Admin!</h2>
        <!-- Place your content here -->

        <!-- CRUD Section -->
        <div class="crud-section">
            <h3>Layanan</h3>
            <form id="service-form">
                <input type="text" id="transaction-date" placeholder="Tanggal" required>
                <input type="text" id="transaction-name" placeholder="Nama" required>
                <input type="text" id="service-name" placeholder="Jenis Layanan" required>
                <textarea id="service-description" placeholder="Keterangan" required></textarea>
                <input type="text" id="service-price" placeholder="Harga" required>
                <button type="submit">Add Service</button>
            </form>
            <table id="service-table">
    
                <tbody>
                    <!-- Service type rows will be dynamically added here -->
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
