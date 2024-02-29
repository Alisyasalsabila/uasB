<div class="halaman">
<?php
include "koneksi.php";
if(isset($_GET['page'])){
@$aksi = $_GET['aksi'];
switch ($aksi){
    default:
$query = "SELECT * FROM tbl_barang";
$hasil = mysqli_query($db_koneksi,$query);

?>
<div class="container">
<center><h2>Halaman kelola barang</h2></center>
<center><a class="btn btn-primary" href="?page=barang&aksi=tambah_barang">Tambah</a></center> <br>
<table width="100%" border="1" style="text-align: center;" align="center">
<tr>
    <th style="background-color:#97A2FF;">No</th>
    <th style="background-color:#97A2FF;">Foto Produk</th>
    <th style="background-color:#AFCBFF;">Nama barang</th>
    <th style="background-color:#97A2FF;">Harga barang</th>
    <th style="background-color:#AFCBFF;">Stok barang</th>
    <th style="background-color:#97A2FF;" colspan="3">Action</th>
</tr>
<?php
$no=1;
while($data=mysqli_fetch_array($hasil)){
?>
<tr>
    <td><?php echo $no++;?></td>
    <td><a><img src="img/<?php echo $data['foto_barang'];?>" class="img-circle" width="100" height="100"></a></td>
    <td><?php echo $data['nama_barang'];?></td>
    <td><?php echo $data['harga_barang'];?></td>
    <td><?php echo $data['stok_barang'];?></td>
    <td><a href="?page=barang&aksi=lihat_barang&id=<?php echo $data['id_barang'];?>">View</a></td>
    <td><a href="?page=barang&aksi=update_barang&id=<?php echo $data['id_barang'];?>">Update</a></td>
    <td><a style="color: red;" href="?page=barang&aksi=delete_barang&id=<?php echo $data['id_barang'];?>" onclick="return confirm('apakah anda yakin menghapus data?')">Delete</a></td>
</tr>
</div>
<?php
}
?>
</table>
<?php
break;
case "tambah_barang":
    include "page/tambah_barang.php";
    break;
case "lihat_barang":
    include "page/lihat_barang.php";
    break;
case "update_barang":
    include "page/update_barang.php";
    break;
case "delete_barang":
    include "page/delete_barang.php";
    break;
}
}else{
    include "page/home.php";
}
?>
</div>