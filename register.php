<?php include "header.php"; ?>
    <!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">            
        <form action="submit_register.php" method="POST" class="checkout__form">
            <div class="row">
                <div class="col-lg-12 mb-5 mt-5">
                    <h5>Daftar</h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Nama <span>*</span></td>
                                <input type="text" required name="nama" placeholder="ketik nama anda disini">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Email <span>*</span></td>
                                <input type="email" required name="email" placeholder="ketik email anda disini">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Nomor telepon <span>*</span></td>
                                <input type="number" required name="nomor_telepon" placeholder="ketik nomor telepon anda disini">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <td>Username <span>*</span></td>
                                <input type="text" required name="username" placeholder="ketik username anda disini">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__form__input">
                                <td>Password<span>*</span></td>
                                <input type="password" required name="pass1" placeholder="ketik password anda disini">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__form__input">
                                <td>Ulangi password <span>*</span></td>
                                <input type="password" required name="pass2" placeholder="ulangi password anda disini">
                            </div>
                        </div>                                                                                                                                               
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="daftar">
                    </div>                    
                </div>
            </form>
            <?php
include "koneksi.php";
@$username = $_POST['username'];
@$nama = $_POST['nama'];
@$email = $_POST['email'];
@$nomor_telepon = $_POST['nomor_telepon'];
@$submit = $_POST['submit'];
if($submit){
$query_insert="INSERT INTO tbl_user VALUES('$username','$nama','$email', '$nomor_telepon');";
$hasil=mysqli_query($db_koneksi, $query_insert) or die ("ERROR INSERT DATA");
    // if ($hasil){
    //     //jika berhasil insert kembali ke halaman kelola
    //     header('Location:?page=kelola');
    // }
}
?>
        </div>
    </section>
    <!-- Checkout Section End -->

<?php include "footer.php"; ?>