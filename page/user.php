<div class="halaman">
<?php
include "koneksi.php";
if(isset($_GET['page'])){
@$aksi = $_GET['aksi'];
switch ($aksi){
    default:
$query = "SELECT * FROM tbl_user";
$hasil = mysqli_query($db_koneksi,$query);
?>
<div class="container">
<center><h2>Halaman kelola user</h2></center> <br>
<table width="100%" border="1" style="text-align:center;" align="center">
<tr>
    <th style="background-color:#AFCBFF;">No</th>
    <th style="background-color:#97A2FF;">Username</th>
    <th style="background-color:#AFCBFF;">Nama</th>
    <th style="background-color:#97A2FF;">Email</th>    
    <th style="background-color:#AFCBFF;" colspan="3">Action</th>
</tr>
<?php
$no=1;
while($data=mysqli_fetch_array($hasil)){
?>
<tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $data['username'];?></td>
    <td><?php echo $data['nama'];?></td>
    <td><?php echo $data['email'];?></td>
    <td><a href="?page=user&aksi=lihat&id=<?php echo $data['username'];?>">View</a></td>
    <td><a style="color:red;" href="?page=user&aksi=delete&id=<?php echo $data['username'];?>" onclick="return confirm('apakah anda yakin menghapus data?')">Delete</a></td>
</tr>
</div>

<?php
}
?>
</table>
<?php
break;
//lihat data
case "lihat":
    include "page/lihat.php";
    break;
case "delete":
    include "page/delete.php";
    break;
}
}else{
    include "page/home.php";
}
?>
</div>