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
            <li><a href="dasboard.html">Dashboard</a></li>
            <li><a href="layanan.html">Jenis Layanan</a></li>
            <li><a href="transaksi.html">Transaksi</a></li>
            <li><a href="logout.html">Logout</a></li>
        </ul>
    </div>

    <div class="container">
        <h1>Layanan</h1>
        <div class="add-button">
            <a href="tambah_layanan.html" class="add-btn">Tambah Data</a>
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
                    <tr>
                        <td>Hubungan Dengan Pelanggan</td>
                        <td>Meningkatkan kemampuan dalam membangun dan memelihara hubungan dengan pelanggan</td>
                        <td>150000</td>
                        <td>
                            <a href="#" class="edit-btn">Edit</a>
                            <a href="#" class="delete-btn">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Meningkatkan Skill</td>
                        <td>Memberikan pemahaman dan keterampilan yang dibutuhkan dalam meningkatkan skill</td>
                        <td>150000</td>
                        <td>
                            <a href="#" class="edit-btn">Edit</a>
                            <a href="#" class="delete-btn">Hapus</a>
                        </td>
                    </tr>
                    <!-- Add more transaction records as needed -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
