<?php include "header.php"; ?>
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="img/bnner.png">
                    <div class="categories__text">
                        <h1>Neo Uniform </h1>
                        <p>Temukan baju sekolah impianmu ditoko kami,Seragam sekolah yang khas sangat mendasar dan dirancang dengan cara yang konservatif.seragam sekolah adalah seragam yang harus dan wajib dipakai disekolah,seragam yang menjadi kebanggaan setiap siswa di Indonesia - By AS simanjuntak .</p>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h4>Produk</h4>
                </div>
            </div>            
        </div>
        <div class="row property__gallery">
            
                    <?php
                    include "./koneksi.php";

                    // Assuming you have a database connection, perform a query to get the data
                    $query = "SELECT * FROM tbl_barang ORDER BY nama_barang DESC LIMIT 3";
                    $result = mysqli_query($db_koneksi, $query);

                    if (!$result) {
                        die('Query Error: ' . mysqli_error($connection));
                    }

                    while ($row = mysqli_fetch_assoc($result)) {
                        $foto_barang = $row['foto_barang'];
                        $harga_barang = $row['harga_barang'];
                        $nama_barang = $row['nama_barang'];

                        echo '<div class="col-lg-3 col-md-4 col-sm-6 mix women">
                                    <div class="product__item">
                                        <a href="./detail_produk.php?id=' . $row['id_barang'] . '">
                                        <img src="admin/img/' . htmlspecialchars($foto_barang) . '" class="img-thumbnail img-responsive" style="width:15rem; height:15rem;"></a>
                                        <div class="product__item__text">
                                            <h6><a href="#">' . htmlspecialchars($nama_barang) . '</a></h6>                       
                                            <div class="product__price">Rp.' . number_format($harga_barang, 2, ',', '.') . '</div>
                                        </div>
                                    </div>
                                </div>  
                              
                              ';

                        // Modal for each product
                        
                    }
                    ?>         
            
            
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Trend Section Begin -->
<!-- Trend Section End -->


<?php include "footer.php"; ?>