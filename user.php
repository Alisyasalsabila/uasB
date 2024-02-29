<?php
//menjalankan session: selalu diletakkan di awal
session_start();
if(isset($_SESSION['level']) && isset($_SESSION['username'])){
    //ini adalah halaman dengan level user
    if($_SESSION['level']=="user"){
        header('location:tampilan_user.php');
    }else{
        echo "anda belum terdaftar sebagai user";
    }
}
//jika user belum terdaftar maka akan diarahkan ke halaman register.php
if(!isset($_SESSION['level'])){
    echo "anda tidak boleh mengakses halaman ini tanpa :";
    echo "<a href='login.php'>Login</a><br>";
    echo "</a href='register.php'>Belum punya user? </a>";
}

?>