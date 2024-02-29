<div class="halaman">
<?php

//DELETE REVIEW

include "cek.php";
include "koneksi.php";
$id=$_GET['id'];
$query_delete= "DELETE FROM tbl_review WHERE id_review='$id';";
$hasil= mysqli_query($db_koneksi, $query_delete);
if ($hasil){
    header('Location: ?page=review');
}else{
    echo "GAGAL HAPUS DATA";
}
?>
</div>