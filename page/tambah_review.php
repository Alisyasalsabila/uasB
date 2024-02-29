<?php

//TAMBAH KATEGORI

include "cek.php";
include "koneksi.php";
@$id_review = $_POST['id_review'];
@$isi_review = $_POST['isi_review'];
@$submit = $_POST['submit'];
if($submit){
$query_insert="INSERT INTO tbl_review VALUES('','$isi_review');";
$hasil=mysqli_query($db_koneksi, $query_insert) or die ("ERROR INSERT DATA");
    if ($hasil){
        //jika berhasil insert kembali ke halaman kelola
        header('Location:?page=review');
    }
}
?>
<center>
<div class="halaman">
<h2>Tambah data</h2><br>
<form method="POST" action="">
<table border="1" align="center">
<tr><input type="hidden" name="id_review"></tr>
<tr>
    <td>Isi review</td>
    <td>:</td>
    <td><input type="text" name="isi_review"></td>
</tr>
</table>
<br>
<td colspan="3"><input type="submit" class="btn btn-primary" name="submit" value="TAMBAH"></td>
</form><br>
<a href="?page=review">Kembali kelola review</a>
</div>

</center>