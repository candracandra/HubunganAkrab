<?php
// Masukkan file koneksi.php
include('koneksi.php');
// Masukkan Dompdf autoload
require_once("../tugas8/dompdf/autoload.inc.php");

// Gunakan namespace Dompdf
use Dompdf\Dompdf;

// Inisialisasi objek Dompdf
$dompdf = new Dompdf();

// Lakukan query untuk mendapatkan data transaksi
$query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi");

// Mulai membuat HTML
$html = '<h3 style="text-align:center;">Data Transaksi</h3>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>ID Layanan</th>
                <th>Harga</th>
            </tr>';

$no = 1;
// Loop untuk menampilkan data transaksi
while ($transaksi = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>$no</td>
                <td>{$transaksi['nama']}</td>
                <td>{$transaksi['tanggal']}</td>
                <td>{$transaksi['id']}</td>
                <td>Rp. " . number_format($transaksi['harga']) . "</td>
            </tr>";
    $no++;
}

$html .= "</table>";

// Muat HTML ke dalam Dompdf
$dompdf->loadHtml($html);

// Set ukuran kertas dan orientasi
$dompdf->setPaper('A4', 'portrait');

// Render HTML ke PDF
$dompdf->render();

// Outputkan file PDF ke browser
$dompdf->stream('laporan-transaksi.pdf');
?>
