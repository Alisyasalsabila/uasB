<div class="halaman">
<?php
include "cek.php";
include "koneksi.php";
$id=$_GET['id'];
$query_delete= "DELETE FROM tbl_barang WHERE id_barang='$id';";
$hasil= mysqli_query($db_koneksi, $query_delete);
if ($hasil){
    header('Location: ?page=barang');
}else{
    echo "GAGAL HAPUS DATA";
}
?>
</div>