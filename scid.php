<?php 
    include "header.php"; 
    include "koneksi.php"; 
?>
    <div class="container">
    <?php
        $view = isset($_GET['view']) ? $_GET['view'] : null;

        switch ($view) {
	    default:
	?>
            <!-- Menampilkan Pesan -->
            <?php
                  if(isset($_GET['e']) && $_GET['e']=='sukses'){
                  ?>
                  <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                              <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <strong>Selamat!</strong>Proses Berhasil
                                    </div>
                               </div>
                         </div>
                   <?php
                  }elseif(isset($_GET['e']) && $_GET['e']=='gagal'){
                  ?>
                        <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                              <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <strong>Error!</strong>Proses Gagal dilakukan...!
                                    </div>
                               </div>
                         </div>

                  <?php
                  }
            ?>

        <div class="row">
            <div class="col-lg-12">
                <h1><small> Pelurusan SCID</small></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
        <div class="panel-body">

        <form class="form-horizontal" method="POST" action="aksi_scid.php?act=update">
                <div class="form-group">
                    <label class="col-md-2">SC ID Old</label>
                        <div class="col-md-4">
                            <input type="text" name="scid_old" class="form-control" placeholder="scid lama" required>
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">SC ID New</label>
                    <div class="col-md-4">
                        <input type="text" name="scid_new" class="form-control" placeholder="scid baru" required>
                    </div>
                </div>
        
                <div class="form-group">
                    <label class="col-md-2"></label>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-primary" value="Update data">
                    </div>
                </div>

         </form>
 
        <?php
        break;    
        }
        ?>
        
    </div>