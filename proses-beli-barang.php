<?php

    $nama = $_POST['nama'];
    $barang = $_POST['barang']; 
    $tanggal_beli = date("Y-m-d");
    $harga_barang = $_POST['harga_barang'];  
    $jumlah_beli = $_POST['jumlah_beli'];  
    $tanggal_bayar = date("Y-m-d"); 
    $metode_bayar = $_POST['metode_bayar'];    
    $alamat_kirim = $_POST['alamat_kirim'];  
    $username = $_POST['username'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];  
    $catatan = $_POST['catatan'];  
    $total_harga = $_POST['total_harga'];
    $foto_barang = $_POST['foto_barang'];  
    $id_transaksi = $_POST['id_transaksi'];  


    // Pastikan Anda sudah mengganti nama database, username, dan password sesuai dengan konfigurasi Anda
    include "./koneksi.php";

    // Gunakan parameterized queries
    $queryDelete = "DELETE FROM tbl_keranjang WHERE id = $id_transaksi";
    $stmt = $db_koneksi->prepare("INSERT INTO tbl_transaksi (nama, barang, tanggal_beli, harga_barang, jumlah_beli, total_harga, tanggal_bayar, metode_bayar, alamat_kirim, username, no_hp, email, catatan, foto_barang) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssss", $nama, $barang, $tanggal_beli, $harga_barang, $jumlah_beli, $total_harga, $tanggal_bayar, $metode_bayar, $alamat_kirim, $username, $no_hp, $email, $catatan, $foto_barang);
    $stmt->execute();

    $resultDelete = $db_koneksi->query($queryDelete);

    if ($stmt->affected_rows > 0 && $resultDelete) {
        header("location:riwayat_pembelian.php?pesan=inputBerhasil");
    } else {
        echo "Error: " . $db_koneksi->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $db_koneksi->close();
?>
