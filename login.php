<?php include "header.php"; ?>
    <!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">            
        <form action="submit_login.php" method="POST" class="checkout__form">
            <div class="row">
                <div class="col-lg-12 mb-5 mt-5">
                    <h5>Masuk</h5>
                    <div class="row">                        
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Username <span>*</span></td>
                                <input type="text" required name="username" placeholder="masukkan username anda disini">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Password<span>*</span></td>
                                <input type="password" required name="pass1" placeholder="masukkan password anda disini">
                            </div>
                        </div>                                                                                                                                                                       
                        </div>
                        <input type="submit" name="submit" value="masuk" class="btn btn-primary">
                    </div>                    
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->

<?php include "footer.php"; ?>