<?php include "header.php"; ?>
    <!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">            
        <form action="#" class="checkout__form">
            <div class="row">
                <div class="col-lg-12 mb-5 mt-5">
                    <h5>Detail Pengembalian Produk</h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Nama <span>*</span></td>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>No transaksi<span>*</span></td>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Alasan <span>*</span></td>
                                <input type="text">
                            </div>
                        </div>
                        
                        <div class="col-lg-12">                            
                            <div class="checkout__form__input">
                                <td>Alamat <span>*</span></td>
                                <input type="text">                                                            
                            </div>
                            <div class="checkout__form__input">
                                <td>No telepon <span>*</span></td>
                                <input type="text">
                            </div>                                                                                                               
                        </div>                        
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Keterangan</td>
                                <input type="text" placeholder="Tambahkan keterangan disini(opsional)">
                            </div>
                        </div>                                                
                        </div>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Kirim pengajuan refund</button></td>
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <h6>Pengajuan refund telah berhasil terkirim</h6>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>                
        </div>
    </div>
    </div>

 <?php include "footer.php"; ?>