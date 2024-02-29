<div class="halaman">
<?php

//LIHAT REVIEW

include "koneksi.php";
$id=$_GET['id'];
$query_lihat="SELECT * FROM tbl_review WHERE id_review='$id';";
$hasil=mysqli_query($db_koneksi,$query_lihat);
$data=mysqli_fetch_array($hasil);
$no=1;
?>
<div class="container">
<h3><center>Lihat data</center></h3><br>
<table border="1" align="center">
<tr>
    <th>id review</th>
    <td><?php echo $data['id_review'];?></td>
</tr>
<tr>
    <th>isi review</th>
    <td><?php echo $data['isi_review'];?></td>
</tr>
</table><br>
<center><a href="?page=review">Kembali Kelola review</a></center>
</div>
</div>