<?php include "header.php"; ?>
    <div class="container-fluid mt-5"> 
        <div class="col-lg-4 centered">
          <div class="card-body mt-4">
            <div class="card-body text-center">
              <img src="img/kucing3.jpg" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3" style="font-size: 25px;">Alisya Salsabila Simanjuntak</h5>
              <p class="text-muted mb-1" style="font-size: 20px;">@Alisya</p>                           
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
                  <p class="text-muted mb-0" style="font-size: 20px;">Alisya Salsabila Simanjuntak</p>  
                  <a href="./edit_profil.php" class="btn btn-primary pull-right">Edit</a>              
                </div>                                
              </div>              
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Username</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" style="font-size: 20px;">@Alisya</p>  
                  <a href="./edit_profil.php" class="btn btn-primary pull-right">Edit</a>                
                </div>                                
              </div>              
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" style="font-size: 20px;">salsabilaalisya5@gmail.com</p>
                  <a href="./edit_profil.php" class="btn btn-primary pull-right">Edit</a>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0" style="font-size: 20px;">Nomor Telepon</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" style="font-size: 20px;">082129709011</p>
                  <a href="./edit_profil.php" class="btn btn-primary pull-right">Edit</a>
                </div>
              </div>
            </div>
          </div> 
          <a href="./logout.php" onclick="return confirm('apakah anda yakin ingin logout?')" class="btn btn-danger btn-lg">Logout</a>         
        </div>                     

<?php include "footer.php"; ?>