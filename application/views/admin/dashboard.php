
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row mt">
            		<div class="col-lg-12">
                    <div class="showback">
                        <div class="alert alert-success"><b>Login Sukses!</b> Selamat Datang Admin <b><?php echo $user->nama ?></b>.</div>          
                    </div>
            	  </div>
            </div>
            <div class="row">
              <div class="col-md-4">
              <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Your Account</h5>
                  </div>
                  <span class="label label-info">admin</span>
                  <h4><b><?php echo $user->nama ?></b></h4>
                  <p><b><?php echo $user->username ?></b></p>
                  <a href="<?php echo base_url()."admin/edit"; ?>">
                    <button type="button" class="btn btn-theme02"><i class="fa fa-cog"></i>Edit Profile</button>
                  </a>
                </div>
              </div><!-- /col-md-4 -->
            </div>
		      </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

  </section>
    
