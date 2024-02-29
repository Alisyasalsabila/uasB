<div class="halaman">
<?php
include "koneksi.php";
$id=$_GET['id'];
$query_lihat="SELECT * FROM tbl_barang WHERE id_barang='$id';";
$hasil=mysqli_query($db_koneksi,$query_lihat);
$data=mysqli_fetch_array($hasil);
$no=1;
?>
<div class="container">
<h3><center>Lihat data</center></h3><br>
<table border="1" align="center">
<tr>
    <th>Foto barang</th>
    <td><a><img src="img/<?php echo $data['foto_barang'];?>" class="img-circle" width="100" height="100"></a></td>
</tr>
<tr>
    <th>Nama barang</th>
    <td><?php echo $data['nama_barang'];?></td>
</tr>
<tr>
    <th>harga barang</th>
    <td><?php echo $data['harga_barang'];?></td>
</tr>
<tr>
    <th>stok barang</th>
    <td><?php echo $data['stok_barang'];?></td>
</tr>
<tr>
    <th>deskripsi barang</th>
    <td><?php echo $data['deskripsi_barang'];?></td>
</tr>
<tr>
    <th>spesifikasi barang</th>
    <td><?php echo $data['spesifikasi_barang'];?></td>
</tr>
<tr>
    <th>warna barang</th>
    <td><?php echo $data['warna_barang'];?></td>
</tr>
<tr>
    <th>ukuran barang</th>
    <td><?php echo $data['ukuran_barang'];?></td>
</tr>
</table><br>
<center><a href="?page=barang">Kembali Kelola barang</a></center>
</div>
</div>