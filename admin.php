<?php
//menjalankan session: selalu diletakkan di awal
session_start();
if(isset($_SESSION['level'])&&isset($_SESSION['username'])){
    //jika level admin akan masuk ke halaman admin.php
    if ($_SESSION['level'] == "admin"){
        header('location: admin/tampilan_admin.php');
    }
    //jika kondisi level user maka akan diarahkan ke halaman user.php
    else if($_SESSION['level'] == "user"){
        header('location:index.php');
    }
}
//jika user belum terdaftar maka akan diarahkan ke halaman register.php
if(!isset($_SESSION['level'])){
    echo "anda tidak boleh mengakses halaman ini tanpa : ";
    echo "<a href='login.php'>login</a><br>";
    echo "<a href='register.php'>belum punya user?</a>";
}
?>