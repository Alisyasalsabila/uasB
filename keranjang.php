<?php
  session_start();
  if (empty($_SESSION['username'])){
    header("location:./login.php");
  }
?>
<?php include "header.php"; ?>
    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                       
                        <?php 

                        if(@$_GET['pesan']=="inputBerhasil"){

                        ?>
                                <div class="alert alert-success">
                                Penyimpanan Berhasil!
                                </div>
                        <?php

                        }

                        ?>


                        <?php 

                        if(@$_GET['pesan']=="hapusBerhasil"){

                        ?>
                                <div class="alert alert-success">
                                Data Berhasil Dihapus!
                                </div>
                        <?php

                        }

                        ?>

                        <?php 

                        if(@$_GET['pesan']=="editBerhasil"){

                        ?>
                                <div class="alert alert-success">
                                Perubahan Berhasil!
                                </div>
                        <?php

                        }

                        ?>
                        
                        <table>
                            <thead>
                                <tr>
                                    <th>Produk</th>                                   
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include "./koneksi.php";
                                $sql=$db_koneksi->query("select * from tbl_keranjang order by created_date DESC");

                                while($row= $sql->fetch_assoc()){
                                ?>                                
                                
                                <tr>
                                    <td class="cart__product__item">
                                        <img src="./admin/img/<?php echo $row['foto_barang']?>" height="90px" width="90px" alt="">
                                        <div class="cart__product__item__title">
                                            <h6><?php echo $row['nama_barang']?></h6>
                                            <h6>Rp. <?php echo number_format($row['harga_barang'], 2, ',', '.') ?></h6>                                     
                                        </div>
                                    </td>                                    
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="<?php echo $row['jumlah_barang']?>">
                                        </div>
                                    </td>
                                    <td class="cart__total">Rp. <?php echo number_format($row['total_harga'], 2, ',', '.') ?></td>
                                    <td class="cart__close"><a href="./beli.php?id=<?php echo $row['id']?>" class="btn btn-success"><span class="icon_wallet"></span> Checkout</a></td>
                                </tr>  
                                
                                <?php    
                                }
                                ?>                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>               
                </div>               
        </div>
    </section>    	
    <!-- Shop Cart Section End -->
<?php include "footer.php"; ?>