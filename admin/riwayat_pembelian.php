<?php
  session_start();
  if (empty($_SESSION['username'])){
    header("location:../login.php");
  }
?>
<?php include '../admin/layout/header.php'; ?>
    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </br>
                <h4>Riwayat Pembelian</h4>    
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

                    </br>
                            <table class="table table-bordered table-hover" id="data-table">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <?php

                                include "../koneksi.php";
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
                                    <td><?php echo $row['nama']?></td>
                                    <td><?php echo $row['alamat_kirim']?></td>
                                    <td><?php echo $row['metode_bayar']?></td>
                                    <td><?php echo $row['barang']?></td>
                                    <td><?php echo $row['tanggal_beli']?></td>
                                    <td>                         
                                        <a data-toggle="modal" data-target="#detailKeranjangModal_<?php echo $row['id_transaksi']?>">
                                            <button class="btn btn-xs btn-info fa fa-circle-info">
                                            <i class="fa fa-info"></i></button>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </table>
                </div>
            </div>
        </div>
    </section>    	
    <!-- Shop Cart Section End -->   
    

 <?php include '../admin/layout/footer.php'; ?>