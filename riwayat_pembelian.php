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
                            </thead>
                            <tbody>
                                <?php

                                include "./koneksi.php";
                                $sql=$db_koneksi->query("select * from tbl_transaksi order by tanggal_bayar DESC");

                                while($row= $sql->fetch_assoc()){
                                    
                                        echo '<div class="modal " id="detailKeranjangModal_' . $row['id_transaksi'] . '" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="detailModalLabel">Detail Pembelian: ' . htmlspecialchars($row['nama']) . '</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <p><strong>Nama:</strong> ' . htmlspecialchars($row['nama']) . '</p>
                                                              <p><strong>Alamat:</strong> ' . htmlspecialchars($row['alamat_kirim']) . '</p> 
                                                              </br>
                                                              <p><strong>Barang:</strong> ' . htmlspecialchars($row['barang']) . '</p>       
                                                              <p><strong>Tanggal Pembelian:</strong> ' . htmlspecialchars($row['tanggal_beli']) . '</p> 
                                                              <p><strong>Harga Barang:</strong> Rp.' . number_format($row['harga_barang'], 2, ',', '.') . '</p>
                                                              <p><strong>Jumlah Pembelian:</strong> ' . htmlspecialchars($row['jumlah_beli']) . '</p>     
                                                              <p><strong>Total Harga:</strong> Rp.' . number_format($row['total_harga'], 2, ',', '.') . '</p>                       <p><strong>Tanggal Bayar:</strong> ' . htmlspecialchars($row['tanggal_bayar']) . '</p>      
                                                              <p><strong>Metode Pembayaran:</strong> ' . htmlspecialchars($row['metode_bayar']) . '</p>                      
                                                              </br>
                                                              <p><strong>Dibuat Pada:</strong> ' . htmlspecialchars($row['tanggal_bayar']) . '</p>   
                                                              </br>                                                      
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>';                                      
                                    
                                ?>                                
                                
                                                                       
                                
                                    <tr>
                                        <td class="col-1">
                                            <img src="admin/img/<?php echo $row['foto_barang']?>" width="90px" height="90px" alt="">
                                            <td class="col-8"> 
                                                <div class="cart__product__item__title">
                                                    <h4 style="margin-left:10px ;"><?php echo $row['barang']?>  </h4>                                             
                                                    <h5 style="margin-left:10px ;"><i class="fa fa-user-o"></i> <?php echo $row['nama']?>"</h5>                                                                              <h5 style="margin-left:10px ;"><i class="fa fa-money"></i> Rp <?php echo number_format($row['total_harga'], 2, ',', '.') ?></h5> 
                                                    <h5 style="margin-left:10px ;"><i class="fa fa-clock-o"></i> <?php echo $row['tanggal_beli']?></h5>                                   
                                                </div>
                                            </td>                                        
                                        </td>                                      
                                        <td>                                        <a data-toggle="modal" data-target="#detailKeranjangModal_<?php echo $row['id_transaksi']?>">
                                            <button class="btn btn-xs btn-info fa fa-circle-info">
                                            <i class="fa fa-info"></i></button>
                                        </a></td>
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
    
    <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <button type="button" class="btn btn-danger"><a href="./refund.php" style="color: white;">Transaksi bermasalah?</a> </button> <br><br>
            <button type="button" class="btn btn-primary"> <a href="./rincian_transaksi.php" style="color: white;">Lihat detail transaksi</a> </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>                
        </div>
    </div>
    </div>

 <?php include "footer.php"; ?>