<div class="halaman">
<?php
ob_start();
include "cek.php";
include "koneksi.php";
$id=$_GET['id'];
$query="SELECT* FROM tbl_barang WHERE id_barang='$id';";
$hasil=mysqli_query($db_koneksi,$query);
$data=mysqli_fetch_array($hasil);
?>
<center>
<h3>Edit data</h3>
<br>
<form method="POST" action="">
<table border="1" align="center">
<tr><input type="hidden" name="id_barang" value="<?php echo $data['id_barang'];?>"></tr>
<tr>
    <td>Foto barang</td>
    <td>:</td>
    <td><input type="text" name="foto_barang" value="<?php echo $data['foto_barang'];?>"></td>
</tr>
<tr>
    <td>Nama barang</td>
    <td>:</td>
    <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang'];?>"></td>
</tr>
<tr>
    <td>Harga barang</td>
    <td>:</td>
    <td><input type="text" name="harga_barang" value="<?php echo $data['harga_barang'];?>"></td>
</tr>
<tr>
    <td>Stok barang</td>
    <td>:</td>
    <td><input type="text" name="stok_barang" value="<?php echo $data['stok_barang'];?>"></td>
</tr>
<tr>
    <td>ukuran barang</td>
    <td>:</td>
    <td><input type="text" name="ukuran_barang" value="<?php echo $data['ukuran_barang'];?>"></td>
</tr>
<tr>
    <td>warna barang</td>
    <td>:</td>
    <td><input type="text" name="warna_barang" value="<?php echo $data['warna_barang'];?>"></td>
</tr>
<tr>
    <td>spesifikasi barang</td>
    <td>:</td>
    <td><input type="text" name="spesifikasi_barang" value="<?php echo $data['spesifikasi_barang'];?>"></td>
</tr>
<tr>
    <td>Deskripsi barang</td>
    <td>:</td>
    <td><input type="text" name="deskripsi_barang" value="<?php echo $data['deskripsi_barang'];?>"></td>
</tr>
</table>
<br>
<td colspan="3"><input type="submit" class="btn btn-primary" name="submit" value="UPDATE"></td>
</form>
<br>
<a href="?page=barang">Kembali Kelola barang</a>
</div>
</center>
<?php
@$id_barang = $_POST['id_barang'];
@$foto_barang = $_POST['foto_barang'];
@$nama_barang = $_POST['nama_barang'];
@$harga_barang = $_POST['harga_barang'];
@$stok_barang = $_POST['stok_barang'];
@$ukuran_barang = $_POST['ukuran_barang'];
@$warna_barang = $_POST['warna_barang'];
@$spesifikasi_barang = $_POST['spesifikasi_barang'];
@$deskripsi_barang = $_POST['deskripsi_barang'];
@$submit = $_POST['submit'];
if($submit){
    $query_update= "UPDATE tbl_barang SET foto_barang='$foto_barang', nama_barang='$nama_barang', harga_barang='$harga_barang', stok_barang='$stok_barang', warna_barang='$warna_barang', ukuran_barang='$ukuran_barang', spesifikasi_barang='$spesifikasi_barang', deskripsi_barang='$deskripsi_barang' WHERE id_barang='$id_barang';";
    $hasil = mysqli_query($db_koneksi,$query_update) or die ("ERROR UPDATE DATA");
    if($hasil){
        header('Location: ?page=barang');
    }
}
?>