<?php include "header.php"; ?>
    <div class="container-fluid mt-5">                   
        <div class="col-lg-4 centered">                    
          <div class="card-body mt-4">
            <div class="card-body text-center">
              <img src="img/kucing1.jpeg" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3" style="font-size: 25px;">John Smith</h5>
              <p class="text-muted mb-1" style="font-size: 20px;">@user xxx</p>                           
            </div>
          </div>          
          </div>
        </div>
        <div class="col-lg-8 centered">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Nama Lengkap</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" placeholder="Ketik Nama Lengkap Disini" style="width: 100%; font-size: 20px;">                                  
                </div>                                
              </div>              
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Username</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" placeholder="Ketik Username Disini" style="width: 100%; font-size: 20px;">                                
                </div>                                
              </div>              
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Email</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" placeholder="Ketik Email Disini" style="width: 100%; font-size: 20px;">                  
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Nomor telepon</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" placeholder="Ketik Nomor Telepon Disini" style="width: 100%; font-size: 20px;">                  
                </div>
              </div>
            </div>            
          </div>
          <a href="./profil.php" class="btn btn-success centered" style="font-size: 20px;">Simpan Perubahan</a> 
          <a href="./index.php" class="btn btn-danger" style="font-size: 20px;">Batal</a>          
        </div>         

<?php include "footer.php"; ?>