<?php
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga_barang = $_POST['harga_barang'];
    $warna = $_POST['warna'];
    $ukuran = $_POST['ukuran'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $total_harga = $_POST['total_harga'];
    $foto_barang = $_POST['foto_barang'];

    $created_date = date("Y-m-d H:i:s");

    // Pastikan Anda sudah mengganti nama database, username, dan password sesuai dengan konfigurasi Anda
    include "./koneksi.php";

    // Gunakan parameterized queries
    $stmt = $db_koneksi->prepare("INSERT INTO tbl_keranjang (nama_barang, harga_barang, jumlah_barang, total_harga, warna, ukuran, nama, alamat, no_hp, created_date, foto_barang) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $nama_barang, $harga_barang, $jumlah_barang, $total_harga, $warna, $ukuran, $nama, $alamat, $no_hp, $created_date, $foto_barang);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("location:keranjang.php?pesan=inputBerhasil");
    } else {
        echo "Error: " . $db_koneksi->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $db_koneksi->close();
?>
