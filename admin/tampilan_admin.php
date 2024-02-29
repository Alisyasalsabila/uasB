<?php include '../admin/layout/header.php'; ?>
<!-- Page Preloder -->

<div class="content">    
    <div class="badan">
    <?php
    if(isset($_GET['page'])){
        $page =$_GET['page'];
        switch ($page){
            case 'home':
                include "../page/home.php";
                break;            
            case 'review':
                include "../page/review.php";
                break;
            case 'user':
                include "../page/user.php";
                break;
            case 'barang':
                include "../page/barang.php";
                break;
            case 'kategori':
                include "../page/kategori.php";
                break;
            case 'transaksi':
                include "../page/transaksi.php";
                break;
            case 'logout':
                include "../logout.php";
                break;
            default:
                echo"<center><h3>Maaf. halaman tidak ditemukan</h3></center>";
                break;
        }
    }else{
        include "../page/home.php";
    }
    ?>
    </div>
 <?php include "../admin/layout/footer.php"; ?>
    
    
    
    
    
    