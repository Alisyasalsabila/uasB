<?php include "header.php"; ?>
    <!-- Product Details Section Begin -->
   <section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">                
                <img
                src="img/formal.jpg"
                height="500" style="border:0" allowfullscreen="">            
        </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <h3>Essential structured blazer</h3>                        
                    <h3>Rp. 50.000</h3>
                </div>
                    <p>kualitas oke.</p>
                    <div class="product__details__button">
                        <div class="quantity">
                            <span>Jumlah:</span>
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>                                          
                    </div>
                    <div class="product__details__widget">
                        <ul>
                            <li>
                                <span>Stok tersedia:</span>
                                <p>1234</p>
                            </li>
                            <li>
                                <span>Warna tersedia:</span>
                                <div class="color__checkbox">
                                    <label for="red">
                                        <input type="radio" name="color__radio" id="red" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="black">
                                        <input type="radio" name="color__radio" id="black">
                                        <span class="checkmark black-bg"></span>
                                    </label>
                                    <label for="grey">
                                        <input type="radio" name="color__radio" id="grey">
                                        <span class="checkmark grey-bg"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Ukuran tersedia:</span>
                                <div class="size__btn">
                                    <label for="xs-btn" class="active">
                                        <input type="radio" id="xs-btn">
                                        xs
                                    </label>
                                    <label for="s-btn">
                                        <input type="radio" id="s-btn">
                                        s
                                    </label>
                                    <label for="m-btn">
                                        <input type="radio" id="m-btn">
                                        m
                                    </label>
                                    <label for="l-btn">
                                        <input type="radio" id="l-btn">
                                        l
                                    </label>
                                </div>
                            </li>
                            <br>
                            <a href="./keranjang.php" class="btn btn-danger"><span class="icon_bag_alt"></span> Tambah ke keranjang</a>
                        <a href="./beli.php" class="btn btn-primary"><span class="icon_wallet"></span> Beli</a>          
                            <li>                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Deskripsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Spesifikasi</a>
                        </li>                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Deskripsi</h6>
                            <td>seragam sekolah yang sangat menarik,dan sangat nyaman dipakai.</td>                            
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <h6>Spesifikasi</h6>
                            produk yang berkualiatas. <hr>
                            nyaman digunakan. <hr>
                            harga yang sangat terjangkau. <hr>                           
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="related__title">
                    <h5>Produk Serupa</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/formal.jpg">                                                
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Buttons tweed blazer</a></h6>                            
                        <div class="product__price">Rp. 50.000</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/formal1.jpg">                        
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Flowy striped skirt</a></h6>                            
                        <div class="product__price">Rp. 50.000</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/formal2.jpg">                                                    
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Cotton T-Shirt</a></h6>                            
                        <div class="product__price">Rp. 50.000</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/formal4.jpg">                            
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Slim striped pocket shirt</a></h6>                            
                        <div class="product__price">Rp. 50.000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<?php include "footer.php"; ?>