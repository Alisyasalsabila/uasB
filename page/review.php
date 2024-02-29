<div class="halaman">
<?php
include "koneksi.php";
if(isset($_GET['page'])){
@$aksi = $_GET['aksi'];
switch ($aksi){
    default:
$query = "SELECT * FROM tbl_review";
$hasil = mysqli_query($db_koneksi,$query);
?>
<div class="container">
<center><h2>Halaman kelola review</h2></center> <br>
<center><a class="btn btn-primary" href="?page=review&aksi=tambah_review">Tambah</a></center> <br>
<table width="100%" border="1" style="text-align:center;" align="center">
<tr>
    <th style="background-color:#AFCBFF;">No</th>
    <th style="background-color:#97A2FF;">Review</th>     
    <th style="background-color:#AFCBFF;" colspan="3">Action</th>
</tr>
<?php
$no=1;
while($data=mysqli_fetch_array($hasil)){
?>
<tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $data['isi_review'];?></td>    
    <td><a href="?page=review&aksi=lihat_review&id=<?php echo $data['id_review'];?>">View</a></td>
    <td><a style="color:red;" href="?page=review&aksi=delete_review&id=<?php echo $data['id_review'];?>" onclick="return confirm('apakah anda yakin menghapus data?')">Delete</a></td>
</tr>
</div>

<?php
}
?>
</table>
<?php
break;
//lihat data
case "lihat_review":
    include "page/lihat_review.php";
    break;
case "tambah_review":
    include "page/tambah_review.php";
    break;
case "delete_review":
    include "page/delete_review.php";
    break;
}
}else{
    include "page/home.php";
}
?>
</div>