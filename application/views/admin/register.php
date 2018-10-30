    <section id="main-content">
        <section class="wrapper">
        <?php if($this->session->flashdata('pesan')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('pesan').'</p>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>
            <h3><i class="fa fa-angle-right"></i>Tambah Admin</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <?php echo validation_errors(); ?>
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Form Register</h4>
                      <?php echo form_open('admin/register', array('class' => 'form-horizontal style-form','needs-validation','novalidate' => ''));?>
                          <form>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" placeholder="Nama">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control" placeholder="Username">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control" placeholder="">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Konfirmasi Password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password2" class="form-control" placeholder="">
                              </div>
                          </div>
                          
                          <button type="submit" class="btn btn-round btn-success">Register</button>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
          </section>
        </section>  