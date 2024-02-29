<div class="halaman">
<?php
include "koneksi.php";
if(isset($_GET['page'])){
@$aksi = $_GET['aksi'];
switch ($aksi){
    default:
$query = "SELECT * FROM tbl_kategori";
$hasil = mysqli_query($db_koneksi,$query);
?>
<div class="container">
<center><h2>Halaman kelola kategori</h2></center>
<center><a class="btn btn-primary" href="?page=kategori&aksi=tambah">Tambah</a></center> <br>
<table width="100%" border="1" style="text-align: center;" align="center">
<tr>
    <th style="background-color:#97A2FF;">No</th>
    <th style="background-color:#AFCBFF;">Nama Kategori</th>
    <th style="background-color:#97A2FF;" colspan="3">Action</th>
</tr>
<?php
$no=1;
while($data=mysqli_fetch_array($hasil)){
?>
<tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $data['nama_kategori'];?></td>
    <td><a href="?page=kategori&aksi=update&id=<?php echo $data['id_kategori'];?>">Update</a></td>
    <td><a style="color: red;" href="?page=kategori&aksi=hapus&id=<?php echo $data['id_kategori'];?>" onclick="return confirm('apakah anda yakin menghapus data?')">Delete</a></td>
</tr>
</div>
<?php
}
?>
</table>
<?php
break;
case "tambah":
    include "page/tambah.php";
    break;
case "update":
    include "page/update.php";
    break;
case "hapus":
    include "page/hapus.php";
    break;
}
}else{
    include "page/home.php";
}
?>
</div>