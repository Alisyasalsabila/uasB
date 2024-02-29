<?php
    $nama_barang = $_POST['nama_barang'];
    $stok_barang = $_POST['stok_barang'];
    $harga_barang = $_POST['harga_barang'];
    $deskripsi_barang = $_POST['deskripsi_barang'];
    $spesifikasi_barang = $_POST['spesifikasi_barang'];  
    $warna_barang = $_POST['warna_barang']; 
    $ukuran_barang = $_POST['ukuran_barang']; 

// Handle image upload
$target_dir = "img/";  // Set your upload directory
$target_file = $target_dir . basename($_FILES["foto_barang"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is a valid image
$check = getimagesize($_FILES["foto_barang"]["tmp_name"]);
if($check === false) {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Allow only PNG and JPEG file formats
if($imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only PNG and JPEG files are allowed.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["foto_barang"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["foto_barang"]["tmp_name"], $target_file)) {
        // Pastikan Anda sudah mengganti nama database, username, dan password sesuai dengan konfigurasi Anda
        include "../koneksi.php";

        // Gunakan parameterized queries
        $stmt = $db_koneksi->prepare("INSERT INTO tbl_barang (foto_barang, nama_barang, harga_barang, stok_barang, deskripsi_barang, spesifikasi_barang, warna_barang, ukuran_barang) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", basename($_FILES["foto_barang"]["name"]), $nama_barang, $harga_barang, $stok_barang, $deskripsi_barang, $spesifikasi_barang, $warna_barang, $ukuran_barang);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("location:barang.php?pesan=inputBerhasil");
        } else {
            echo "Error: " . $db_koneksi->error;
        }

        // Tutup statement dan koneksi
        $stmt->close();
        $db_koneksi->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
