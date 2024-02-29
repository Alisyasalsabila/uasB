
<?php
  session_start();
  if (empty($_SESSION['username'])){
    header("location:../login.php");
  }
?>
<?php include '../admin/layout/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            </br>
            <h4>Data Barang</h4>    
            </br>
            <a href="input-barang.php">
                <button class="btn btn-info">Tambah Barang</button>
            </a>
            </br>
            </br>
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
            <table id="dataTables" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Spesifikasi</th>
                    <th>Warna</th>
                    <th>Ukuran</th>
                    <th>Action</th>
                </tr> 
            </thead> 
            <tbody>
            <?php

            include "../koneksi.php";
            $sql=$db_koneksi->query("select * from tbl_barang order by nama_barang ASC");

            while($row= $sql->fetch_assoc()){
            ?>

                <tr>
                    <td><?php echo $row['nama_barang']?></td>
                    <td><?php echo $row['harga_barang']?></td>
                    <td><?php echo $row['stok_barang']?></td>
                    <td><?php echo $row['deskripsi_barang']?></td>
                    <td><?php echo $row['spesifikasi_barang']?></td>
                    <td><?php echo $row['warna_barang']?></td>
                    <td><?php echo $row['ukuran_barang']?></td>
                    <td>
                        <div style="display: flex; gap: 5px;">
                            <a href="edit-barang.php?id=<?php echo $row['id_barang']?>" class="btn btn-xs btn-warning">
                                <i class="fa fa-pencil"></i> 
                            </a>
                            <a href="hapus-barang.php?id=<?php echo $row['id_barang']?>" onclick="return confirm('Anda yakin menghapus data?')" class="btn btn-xs btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>                  

                    </td>



                </tr>

            <?php    
            }
            ?>
            </tbody>
            </table>
        </div>
    </div>
</div>


<?php include "../admin/layout/footer.php"; ?>  