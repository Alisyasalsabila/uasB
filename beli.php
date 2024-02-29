<?php
  session_start();
  if (empty($_SESSION['username'])){
    header("location:./login.php");
  }

  if (isset($_POST['kirim'])) {
    // Get values from the form
    $nama = $_POST['nama'];
    $barang = $_POST['barang']; 
    $tanggal_beli = date("Y-m-d");
    $harga_barang = $_POST['harga_barang'];  
    $jumlah_beli = $_POST['jumlah_beli'];  
    $total_harga = $harga_barang * $jumlah_beli;  
    $tanggal_bayar = date("Y-m-d"); 
    $metode_bayar = $_POST['metode_bayar'];    
    $alamat_kirim = $_POST['alamat_kirim'];  
    $username = $_POST['username'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];  
    $catatan = $_POST['catatan'];  
    $foto_barang = $_POST['foto_barang'];  
    $_POST['total_harga'] = $total_harga;
    $id_transaksi = $_POST['id_transaksi'];  
  }

?>
<?php include "header.php"; ?>
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">            
        <form action="proses-beli-barang.php" method="POST" class="checkout__form">
            <div class="row">
                <div class="col-lg-8 mb-5 mt-5">
                        <?php
                            $id=$_GET['id'];
                            include "./koneksi.php";
                            $tampil=$db_koneksi->query("select * from tbl_keranjang where id ='$id' LIMIT 1");
                            $row=$tampil->fetch_assoc();

                            $username = $_SESSION['username'];
                        ?>  
                        <h5>Detail Pemesanan</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <td>Nama Lengkap <span>*</span></td>
                                    <input type="text" name="nama" value="<?php echo $row['nama']?>" readOnly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <td>Username <span>*</span></td>
                                    <input type="text" name="username" value="<?php echo $username?>" readOnly>
                                </div>
                            </div>
                            <div class="col-lg-12">                            
                                <div class="checkout__form__input">
                                    <td>Alamat <span>*</span></td>
                                    <input type="text" name="alamat_kirim" value="<?php echo $row['alamat']?>" readOnly>                                                            
                                </div>                                
                                <div>                                                                
                                        <td>Metode pembayaran:</td><br>                                    
                                        <td><input type="radio" name="metode_pembayaran" value="COD" checked onclick="updateMetodeBayar(this)">COD <br>
                                            <input type="radio" name="metode_pembayaran" value="Transfer" onclick="updateMetodeBayar(this)">Transfer</td>                                                                                                                                                       
                                </div> 
                                <br>                                                   
                            </div>                        
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <td>No. telp<span>*</span></td>
                                    <input type="text" name="no_hp" value="<?php echo $row['no_hp']?>" readOnly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <td>Email <span>*</span></td>
                                    <input name="email" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <td>Catatan <span>*opsional</span></td>
                                    <input name="catatan" type="text">
                                </div>
                            </div>     
                            <div class="col-lg-12" hidden>
                                <div class="checkout__form__input">
                                    <td>Barang <span>*opsional</span></td>
                                    <input name="barang" type="text" value="<?php echo $row['nama_barang']?>">
                                </div>
                            </div>                             
                            <div class="col-lg-12" hidden>
                                <div class="checkout__form__input">
                                    <td>Harga Barang <span>*opsional</span></td>
                                    <input name="harga_barang" type="text" value="<?php echo $row['harga_barang']?>">
                                </div>
                            </div> 
                            <div class="col-lg-12" hidden>
                                <div class="checkout__form__input">
                                    <td>Jumlah Beli <span>*opsional</span></td>
                                    <input name="jumlah_beli" type="text" value="<?php echo $row['jumlah_barang']?>">
                                </div>
                            </div> 
                            <div class="col-lg-12" hidden>
                                <div class="checkout__form__input">
                                    <td>Foto Barang <span>*opsional</span></td>
                                    <input name="foto_barang" type="text" value="<?php echo $row['foto_barang']?>">
                                </div>
                            </div>                            
                            <div class="col-lg-12" hidden>
                                <div class="checkout__form__input">
                                    <td>Total Harga <span>*opsional</span></td>
                                    <input name="total_harga" type="number" value="<?php echo $row['total_harga']?>">
                                </div>
                            </div>      
                            <div class="col-lg-12" hidden>
                                <div class="checkout__form__input">
                                    <td>ID <span>*opsional</span></td>
                                    <input name="id_transaksi" type="number" value="<?php echo $id?>">
                                </div>
                            </div>                              
                            
                        </div>
                        </div>
                        <div class="col-lg-4 mt-5">
                            <div class="checkout__order">
                                <h5>Pesananmu</h5>
                                <div class="checkout__order__product">
                                    <ul>
                                        <li>
                                            <span class="top__text">Produk</span>
                                            <span class="top__text__right">Total</span>
                                        </li>
                                        <li>01. <?php echo $row['nama_barang']?> <span>Rp. <?php echo number_format($row['total_harga'], 2, ',', '.') ?></span></li>
                                    </ul>
                                </div>
                                <div class="checkout__order__total">
                                    <ul>
                                        <li>Total <span>Rp. <?php echo number_format($row['total_harga'], 2, ',', '.') ?></span></li>
                                        <li>Metode Bayar <input id="metode_bayar" name="metode_bayar" type="text" style="color:blue; width:100px; margin-left:5rem; text-align:center;" value="" required readOnly></li>
                                    </ul>
                                </div>                            
                                <button type="submit" class="btn btn-primary" >
                                    Pesan sekarang
                                   </button>
                                </div>
                        </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">Transaksi Sukses</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary"> <a href="./rincian_transaksi.php" style="color: white;">Lihat detail transaksi</a> </button>
        </div>
        </div>
    </div>
</div>

<script>
    function updateMetodeBayar(radioButton) {
        var nilai = radioButton.value;

        document.getElementById("metode_bayar").value = nilai;

        var radioButtons = document.getElementsByName("metode_pembayaran");
        for (var i = 0; i < radioButtons.length; i++) {
            radioButtons[i].checked = false;
        }

        // Mencentang radio button yang terpilih
        radioButton.checked = true;
    }
</script>

<?php include "footer.php"; ?>