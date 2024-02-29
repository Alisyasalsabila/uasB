<div class="halaman">
<?php

//DELETE USER

include "cek.php";
include "koneksi.php";
$id=$_GET['id'];
$query_delete= "DELETE FROM tbl_user WHERE username='$id';";
$hasil= mysqli_query($db_koneksi, $query_delete);
if ($hasil){
    header('Location: ?page=user');
}else{
    echo "GAGAL HAPUS DATA";
}
?>
</div>