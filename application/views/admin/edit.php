    <section id="main-content">
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Edit Account</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Form Edit</h4>
                      <?php echo validation_errors(); ?>
                      <?php echo form_open(current_url(),array('class' => 'form-horizontal style-form','needs-validation','novalidate' => ''));?>
                          <form>
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">ID</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static"><?php echo $id_admin; ?></p>
                                  <input type="hidden" class="form-control" name="id_admin" value="<?php echo $id_admin; ?>" hidden>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Konfirmasi Password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password2" class="form-control" placeholder="">
                              </div>
                          </div>
                          
                          <button type="submit" class="btn btn-round btn-success">Edit</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          </section>
        </section>  