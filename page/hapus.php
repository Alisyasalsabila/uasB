<div class="halaman">
<?php

//DELETE KATEGORI

include "cek.php";
include "koneksi.php";
$id=$_GET['id'];
$query_delete= "DELETE FROM tbl_kategori WHERE id_kategori='$id';";
$hasil= mysqli_query($db_koneksi, $query_delete);
if ($hasil){
    header('Location: ?page=kategori');
}else{
    echo "GAGAL HAPUS DATA";
}
?>
</div>