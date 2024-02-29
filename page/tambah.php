<?php

//TAMBAH KATEGORI

include "cek.php";
include "koneksi.php";
@$id_kategori = $_POST['id_kategori'];
@$nama_kategori = $_POST['nama_kategori'];
@$submit = $_POST['submit'];
if($submit){
$query_insert="INSERT INTO tbl_kategori VALUES('','$nama_kategori');";
$hasil=mysqli_query($db_koneksi, $query_insert) or die ("ERROR INSERT DATA");
    if ($hasil){
        //jika berhasil insert kembali ke halaman kelola
        header('Location:?page=kategori');
    }
}
?>
<center>
<div class="halaman">
<h2>Tambah data</h2><br>
<form method="POST" action="">
<table border="1" align="center">
<tr><input type="hidden" name="id_kategori"></tr>
<tr>
    <td>Nama Kategori</td>
    <td>:</td>
    <td><input type="text" name="nama_kategori"></td>
</tr>
</table>
<br>
<td colspan="3"><input type="submit" class="btn btn-primary" name="submit" value="TAMBAH"></td>
</form><br>
<a href="?page=kategori">Kembali kelola kategori</a>
</div>

</center>