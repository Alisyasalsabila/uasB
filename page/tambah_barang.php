<?php
include "cek.php";
include "koneksi.php";
@$id_barang = $_POST['id_barang'];
@$foto_barang = $_POST['foto_barang'];
@$nama_barang = $_POST['nama_barang'];
@$harga_barang = $_POST['harga_barang'];
@$stok_barang = $_POST['stok_barang'];
@$deskripsi_barang = $_POST['deskripsi_barang'];
@$spesifikasi_barang = $_POST['spesifikasi_barang'];
@$warna_barang = $_POST['warna_barang'];
@$ukuran_barang = $_POST['ukuran_barang'];
@$submit = $_POST['submit'];
if($submit){
$query_insert="INSERT INTO tbl_barang VALUES('', '$foto_barang', '$nama_barang','$harga_barang', '$stok_barang','$deskripsi_barang', '$spesifikasi_barang', '$warna_barang', '$ukuran_barang');";
$hasil=mysqli_query($db_koneksi, $query_insert) or die ("ERROR INSERT DATA");
    if ($hasil){
        //jika berhasil insert kembali ke halaman kelola
        header('Location:?page=barang');
    }
}
?>
<center>
<div class="halaman">
<h2>Tambah data</h2><br>
<form method="POST" action="">
<table border="1" align="center">
<tr><input type="hidden" name="id_barang"></tr>
<tr>
    <td>Foto barang</td>
    <td>:</td>
    <td><input type="text" name="foto_barang"></td>
</tr>
<tr>
    <td>Nama barang</td>
    <td>:</td>
    <td><input type="text" name="nama_barang"></td>
</tr>
<tr>
    <td>Harga barang</td>
    <td>:</td>
    <td><input type="text" name="harga_barang"></td>
</tr>
<tr>
    <td>Stok barang</td>
    <td>:</td>
    <td><input type="text" name="stok_barang"></td>
</tr>
<tr>
    <td>Deskripsi barang</td>
    <td>:</td>
    <td><input type="text" name="deskripsi_barang"></td>
</tr>
<tr>
    <td>spesifikasi barang</td>
    <td>:</td>
    <td><input type="text" name="spesifikasi_barang"></td>
</tr>
<tr>
    <td>warna barang</td>
    <td>:</td>
    <td><input type="text" name="warna_barang"></td>
</tr>
<tr>
    <td>ukuran barang</td>
    <td>:</td>
    <td><input type="text" name="ukuran_barang"></td>
</tr>
</table> <br>
<td colspan="3"><input type="submit" class="btn btn-primary" name="submit" value="TAMBAH"></td>
</form><br>
<a href="?page=barang">Kembali kelola barang</a>
</div>
</center>