<div class="halaman">
<?php

//LIHAT USER

include "koneksi.php";
$id=$_GET['id'];
$query_lihat="SELECT * FROM tbl_user WHERE username='$id';";
$hasil=mysqli_query($db_koneksi,$query_lihat);
$data=mysqli_fetch_array($hasil);
$no=1;
?>
<div class="container">
<h3><center>Lihat data</center></h3><br>
<table border="1" align="center">
<tr>
    <th>Nama user</th>
    <td><?php echo $data['nama'];?></td>
</tr>
<tr>
    <th>Nomor telepon user</th>
    <td><?php echo $data['nomor_telepon'];?></td>
</tr>
<tr>
    <th>Email user</th>
    <td><?php echo $data['email'];?></td>
</tr>
<tr>
    <th>Username user</th>
    <td><?php echo $data['username'];?></td>
</tr>
</table><br>
<center><a href="?page=user">Kembali Kelola user</a></center>
</div>
</div>