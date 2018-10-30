    <section id="main-content">
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Tambah Order</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <?php echo validation_errors(); ?>
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Form Add</h4>
                      <?php echo form_open('Order/do_insert', array('class' => 'form-horizontal style-form','needs-validation','novalidate' => ''));?>
                          <form>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Order</label>
                              <div class="col-sm-10">
                                  <input type="date" name="tgl_order" class="form-control" placeholder="Tanggal Order">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total</label>
                              <div class="col-sm-10">
                                  <input type="text" name="total" class="form-control" placeholder="total">
                              </div>
                          </div>
                          <button type="submit" class="btn btn-round btn-success">Add</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          </section>
        </section>  