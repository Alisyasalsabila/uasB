<?php
  session_start();
  if (empty($_SESSION['username'])){
    header("location:../login.php");
  }

  // Check if the form is submitted
  if (isset($_POST['kirim'])) {
    // Get values from the form
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga_barang = $_POST['harga_barang'];
    $warna = $_POST['warna'];
    $ukuran = $_POST['ukuran'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $foto_barang = $_POST['foto_barang'];

    // Calculate total_harga
    $total_harga = $harga_barang * $jumlah_barang;

    // Update the $_POST array with the calculated total_harga
    $_POST['total_harga'] = $total_harga;
  }
?>
<?php include "header.php"; ?>
    <!-- Product Details Section Begin -->
   <section class="product-details spad">
    <div class="container">
        <div class="row">
            <?php
                $id=$_GET['id'];
                include "./koneksi.php";
                $tampil=$db_koneksi->query("select * from tbl_barang where id_barang='$id'");
                $row=$tampil->fetch_assoc();
            ?>                 
            
            <div class="col-lg-4">                
                <img
                src="admin/img/<?php echo $row['foto_barang']?>"
                height="500" style="border:0" allowfullscreen="">            
            </div>
            <div class="col-lg-6">
                <form action="proses-input-keranjang.php" method="POST">
                    <div class="product__details__text">
                        <h3><?php echo $row['nama_barang']?></h3>                        
                        <h3>Rp. <?php echo number_format($row['harga_barang'], 2, ',', '.') ?></h3>
                    </div>
                    <p><?php echo $row['deskripsi_barang']?></p>
                    <div class="product__details__button">
                        <div class="quantity">
                            <span>Jumlah:</span>
                            <div class="pro-qty">
                                <input id="jumlah_barang" name="jumlah_barang" type="number" oninput="calculateTotal()" value="" required>
                            </div>
                        </div>        
                        <div class="quantity">
                            <span>Harga:</span>
                            <div class="pro-qty">
                                <input id="harga_barang" name="harga_barang" type="text" value="<?php echo $row['harga_barang'] ?>" oninput="calculateTotal()" readonly>
                            </div>
                        </div>          
                        <div class="quantity">
                            <span>Total Harga:</span>
                            <div class="pro-qty">
                                <input type="number" name="total_harga" id="total_harga" value="" readonly>
                            </div>
                        </div>                        
                        
                    </div>
                    <div class="product__details__widget">
                        <ul>
                            <li>
                                <span>Stok tersedia:</span>
                                <p><?php echo $row['stok_barang']?></p>
                            </li>
                            <li hidden>
                                <span>Nama Barang:</span>
                                <div class="color__checkbox">
                                    <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']?>" class="form-control" required>
                                </div>
                            </li>       
                            <li hidden>
                                <span>Foto Barang:</span>
                                <div class="color__checkbox">
                                    <input type="text" name="foto_barang" value="<?php echo $row['foto_barang']?>" class="form-control" required>
                                </div>
                            </li>     
                            <li>
                                <span>Warna:</span>
                                <div class="color__checkbox">
                                    <input type="text" name="warna" value="" class="form-control" required>
                                </div>
                            </li>
                            <li>
                                <span>Ukuran:</span>
                                <div class="size__btn">
                                    <input type="text" name="ukuran" value="" class="form-control" required>
                                </div>
                            </li>
                            <br>
                            <li>
                                <span>Nama:</span>
                                <div class="size__btn">
                                    <input type="text" name="nama" value="" class="form-control" required>
                                </div>
                            </li>
                            <li>
                                <span>Alamat Pengiriman:</span>
                                <div class="size__btn">
                                    <input type="text" name="alamat" value="" class="form-control" required>
                                </div>
                            </li>      
                            <li>
                                <span>Nomor Handphone:</span>
                                <div class="size__btn">
                                    <input type="number" name="no_hp" value="" class="form-control" required>
                                </div>
                            </li>                              
                            
                            <br>
                            <button type="submit" class="btn btn-danger"><span class="icon_bag_alt"></span> Tambah ke keranjang</button>        
                            <li>                                
                            </li>
                        </ul>
                    </div>
                </form>
                </div>
            </div>
            <div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-1" role="tab">Spesifikasi</a>
                        </li>                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Spesifikasi</h6>
                            <?php echo $row['spesifikasi_barang']?>                          
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="related__title">
                    <h5>Produk Lainnya</h5>
                </div>
            </div>
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
<!-- Product Details Section End -->


    <script>
        function calculateTotal() {
            var harga_barang = document.getElementById('harga_barang').value;
            var jumlah_barang = document.getElementById('jumlah_barang').value;
            var total_harga = harga_barang * jumlah_barang;
            document.getElementById('total_harga').value = total_harga;
        }
    </script>

<?php include "footer.php"; ?>