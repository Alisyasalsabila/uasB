<?php
session_start();
if (empty($_SESSION['username'])){
    header("location:../login.php");
    exit(); // Tambahkan exit() setelah header untuk memastikan tidak ada kode ekstra yang dijalankan.
}

$id=$_GET['id'];

include "../koneksi.php";

// Gunakan parameterized queries
$hapus = $db_koneksi->prepare("DELETE FROM tbl_barang WHERE id_barang = ?");
$hapus->bind_param("i", $id);
$hapus->execute();

if ($hapus->affected_rows > 0) {
    header("location:barang.php?pesan=hapusBerhasil");
} else {
    echo "Error: " . $koneksi->error;
}

// Tutup statement dan koneksi
$hapus->close();
$koneksi->close();
?>
