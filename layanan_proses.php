<?php
require_once 'koneksi.php';

// Fungsi untuk menambahkan layanan baru
function addLayanan($jenis_layanan, $deskripsi, $harga) {
    global $koneksi;
    $sql = "INSERT INTO tb_layanan (jenis_layanan, deskripsi, harga) VALUES ('$jenis_layanan', '$deskripsi', '$harga')";
    return mysqli_query($koneksi, $sql);
}

// Fungsi untuk mendapatkan semua layanan
function getLayanan() {
    global $koneksi;
    $sql = "SELECT * FROM tb_layanan";
    return mysqli_query($koneksi, $sql);
}

// Fungsi untuk menghapus layanan
function deleteLayanan($id) {
    global $koneksi;
    $sql = "DELETE FROM tb_layanan WHERE id=$id";
    return mysqli_query($koneksi, $sql);
}

// Fungsi untuk memperbarui layanan
function updateLayanan($id, $jenis_layanan, $deskripsi, $harga) {
    global $koneksi;
    $sql = "UPDATE tb_layanan SET jenis_layanan='$jenis_layanan', deskripsi='$deskripsi', harga='$harga' WHERE id=$id";
    return mysqli_query($koneksi, $sql);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        addLayanan($_POST['jenis_layanan'], $_POST['deskripsi'], $_POST['harga']);
    } elseif (isset($_POST['delete'])) {
        deleteLayanan($_POST['id']);
    } elseif (isset($_POST['update'])) {
        updateLayanan($_POST['id'], $_POST['jenis_layanan'], $_POST['deskripsi'], $_POST['harga']);
    }
    header('Location: layanan.php');
    exit();
}
?>
