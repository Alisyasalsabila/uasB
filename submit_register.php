<?php

$username =$_POST['username'];
$nama= $_POST['nama'];
$email=$_POST['email'];
$nomor_telepon=$_POST['nomor_telepon'];
$password1 = $_POST['pass1'];
$password2 =$_POST['pass2'];
$level = "user"; 

//cek keamanan password
if($password1==$password2){
    include "koneksi.php";

    //perlu dibuat pengacak
    $pengacak= 'p3ng4c4k';

    //mengenskripsi password dengan md5 dan pengacak
    $passmd = md5($pengacak . md5($password1));

    //menyimpan username dan password terenskripsi ke database
    $query ="INSERT INTO tbl_user VALUES('$username','$nama','$email', '$nomor_telepon', '$passmd','$level')";
    $hasil = mysqli_query($db_koneksi, $query);

    //menampilkan status pendaftaran
    if($hasil) header('location:index.php');
    else echo "username sudah ada yang memiliki";
}else echo "password yang dimasukkan tidak sama";
echo "<a href='login.php'>Login Disini</a>";
?>