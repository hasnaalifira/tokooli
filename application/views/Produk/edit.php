    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>Edit Kota</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Form Edit</h4>
                      <?php echo validation_errors(); ?>
                      <?php echo form_open(current_url(),array('class' => 'form-horizontal style-form','needs-validation','novalidate' => ''));?>
                          <form>
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">ID Produk</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static"><?php echo $id_produk; ?></p>
                                  <input type="hidden" class="form-control" name="id_produk" value="<?php echo $id_produk; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID Kategori</label>
                              <div class="col-sm-10">
                                  <input type="text" name="id_kategori" class="form-control" value="<?php echo $id_kategori; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-10">
                                  <input type="text" name="harga" class="form-control" value="<?php echo $harga; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stock</label>
                              <div class="col-sm-10">
                                  <input type="text" name="stock" class="form-control" value="<?php echo $stock; ?>">
                              </div>
                          </div>
                          
                          <button type="submit" class="btn btn-round btn-success">Edit</button>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
          </section>
        </section>  