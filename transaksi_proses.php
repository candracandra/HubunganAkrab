<?php
require_once 'koneksi.php';

// Fungsi untuk menambahkan transaksi baru
function tambahTransaksi($tanggal, $nama, $id) {
    global $koneksi;
    // Ambil harga dari tb_layanan berdasarkan id_layanan
    $sqlHarga = "SELECT harga FROM tb_layanan WHERE id = $id";
    $resultHarga = mysqli_query($koneksi, $sqlHarga);
    $rowHarga = mysqli_fetch_assoc($resultHarga);
    $harga = $rowHarga['harga'];
    
    $sql = "INSERT INTO tb_transaksi (tanggal, nama, id, harga) VALUES ('$tanggal', '$nama', '$id', '$harga')";
    return mysqli_query($koneksi, $sql);
}

// Fungsi untuk mendapatkan semua transaksi
function semuaTransaksi() {
    global $koneksi;
    $sql = "SELECT tb_transaksi.id_transaksi, tb_transaksi.tanggal, tb_transaksi.nama, tb_layanan.jenis_layanan, tb_transaksi.harga
            FROM tb_transaksi
            JOIN tb_layanan ON tb_transaksi.id = tb_layanan.id";
    return mysqli_query($koneksi, $sql);
}

// Fungsi untuk menghapus transaksi
function hapusTransaksi($id_transaksi) {
    global $koneksi;
    $sql = "DELETE FROM tb_transaksi WHERE id_transaksi = $id_transaksi";
    return mysqli_query($koneksi, $sql);
}

// Fungsi untuk memperbarui transaksi
function perbaruiTransaksi($id_transaksi, $tanggal, $nama, $id) {
    global $koneksi;
    // Ambil harga dari tb_layanan berdasarkan id_layanan
    $sqlHarga = "SELECT harga FROM tb_layanan WHERE id = $id";
    $resultHarga = mysqli_query($koneksi, $sqlHarga);
    $rowHarga = mysqli_fetch_assoc($resultHarga);
    $harga = $rowHarga['harga'];

    $sql = "UPDATE tb_transaksi SET tanggal='$tanggal', nama='$nama', id='$id', harga='$harga' WHERE id_transaksi=$id_transaksi";
    return mysqli_query($koneksi, $sql);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['tambah'])) {
        tambahTransaksi($_POST['tanggal'], $_POST['nama'], $_POST['id']);
    } elseif (isset($_POST['hapus'])) {
        hapusTransaksi($_POST['id_transaksi']);
    } elseif (isset($_POST['perbarui'])) {
        perbaruiTransaksi($_POST['id_transaksi'], $_POST['tanggal'], $_POST['nama'], $_POST['id']);
    }
    header('Location: transaksi.php');
    exit();
}
?>
