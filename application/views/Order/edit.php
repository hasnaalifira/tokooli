    <section id="main-content">
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Edit </h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Form Edit</h4>
                      <?php echo validation_errors(); ?>
                      <?php echo form_open(current_url(),array('class' => 'form-horizontal style-form','needs-validation','novalidate' => ''));?>
                          <form>
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">ID Order</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static"><?php echo $id_order; ?></p>
                                  <input type="hidden" class="form-control" name="id_order" value="<?php echo $id_order; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Order</label>
                              <div class="col-sm-10">
                                  <input type="text" name="tgl_order" class="form-control" value="<?php echo $tgl_order; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total</label>
                              <div class="col-sm-10">
                                  <input type="text" name="total" class="form-control" value="<?php echo $total; ?>">
                              </div>
                          </div>
                          
                          <button type="submit" class="btn btn-round btn-success">Edit</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          </section>
        </section>  