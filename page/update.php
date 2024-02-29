<div class="halaman">
<?php

//UPDATE KATEGORI

ob_start();
include "cek.php";
include "koneksi.php";
$id=$_GET['id'];
$query="SELECT* FROM tbl_kategori WHERE id_kategori='$id';";
$hasil=mysqli_query($db_koneksi,$query);
$data=mysqli_fetch_array($hasil);
?>
<center>
<h3>Edit data</h3><br>
<form method="POST" action="">
<table border="1" align="center">
<tr><input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori'];?>"></tr>
<tr>
    <td>Kategori Berita</td>
    <td>:</td>
    <td><input type="text" name="nama_kategori" value="<?php echo $data['nama_kategori'];?>"></td>
</tr>
</table><br>
<td colspan="3"><input type="submit" class="btn btn-primary" name="submit" value="UPDATE"></td>
</form><br>
<a href="?page=kategori">Kembali Kelola kategori</a>
</div>
</center>
<?php
@$id_kategori = $_POST['id_kategori'];
@$nama_kategori = $_POST['nama_kategori'];
@$submit = $_POST['submit'];
if($submit){
    $query_update= "UPDATE tbl_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori';";
    $hasil = mysqli_query($db_koneksi,$query_update) or die ("ERROR UPDATE DATA");
    if($hasil){
        header('Location: ?page=kategori');
    }
}
?>