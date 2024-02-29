<!DOCTYPE html>
<html>
<head>
    <title>membuat halaman web dinamis dengan PHP</title>
    <script type="text/javascript" src="jquery.js"></script>
    <style type="text/css">
        /*body*/
body{
    background-color: #f0f0f0;
    font-size: 16px;
    color: #444;
    font-family: 'Times New Roman', Times, serif;
    border: 1;
}

.content{
    width: 80%;
    margin: 10px auto;
}

/*header*/
header{
    background-color: #6EB5FF;
    padding: 20px 10px;
    border-radius: 5px;
    border: 1px solid #f0f0f0;
    margin-bottom: 10px;
}

header h1.judul,
header h3.deskripsi{
    text-align: center;
}

/*menu navigasi*/
.menu{
    background-color: #D5AAFF;
    border: 1px solid #f0f0f0;
    border-radius: 8px;
    margin-bottom: 10px;
}

div.menu ul{
    list-style: none;
    overflow: hidden;
}


div.menu ul li{
    float: left;
    text-transform: uppercase;
}
div.menu ul li a{
    display: block;
    padding: 0 20px;
    text-decoration: none;
    color: #2c2c2c;
    font-family: sans-serif;
    font-size: 13px;
    font-weight: 400;
    transition: all 0.3s ease-in-out;
}
div.menu ul li a:hover, 
div.menu ul li a.hoverover{
    cursor: pointer;
    color: red;
}
div.badan{
    background-color: white;
    border-radius: 5px;
    border: 1px solid #f0f0f0;
    margin-bottom: 10px;
}
div.halaman{
    text-align: center;
    padding: 30px 20px;
}
/*footer*/
footer{
    background-color: #FF9CEE;
    padding: 20px 10px;
    border-radius: 5px;
    border: 1px solid #f0f0f0;
    margin-bottom: 10px;
}
    </style>
</head>
<body>
<div class="content">
    <header>
        <h1 class="judul">Hai Fijriati</h1>
        <h3 class="deskripsi">Ini adalah tampilan USER web PTS</h3>
    </header>
    <div class="menu">
        <ul>
            <li><a href="tampilan_user.php?page=home">HOME</a></li>
            <li><a href="tampilan_user.php?page=tentang">TENTANG</a></li>
            <li><a href="tampilan_user.php?page=tutorial">TUTORIAL</a></li>
            <li><a href="tampilan_user.php?page=kelola">KELOLA</a></li>
            <li><a href="tampilan_user.php?page=logout">LOGOUT</a></li>
        </ul>
    </div>
    <div class="badan">
    <?php
    if(isset($_GET['page'])){
        $page =$_GET['page'];
        switch ($page){
            case 'home':
                include "page/home.php";
                break;
            case 'tentang':
                include "page/tentang.php";
                break;
            case 'tutorial':
                include "page/tutorial.php";
                break;
            case 'kelola':
                include "page/kelola.php";
                break;
            case 'logout':
                include "page/logout.php";
                break;
            default:
                echo"<center><h3>Maaf. halaman tidak ditemukan</h3></center>";
                break;
        }
    }else{
        include "page/home.php";
    }
    ?>
    </div>
    <footer>
        ini adalah footer
    </footer>
</div>
</body>
</html>