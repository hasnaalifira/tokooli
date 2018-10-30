    <section id="main-content">
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Tambah Kategori</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <?php echo validation_errors(); ?>
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Form Add</h4>
                      <?php echo form_open('Kategori/do_insert', array('class' => 'form-horizontal style-form','needs-validation','novalidate' => ''));?>
                          <form>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Kategori</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" placeholder="Nama Kategori">
                              </div>
                          </div>
                          <button type="submit" class="btn btn-round btn-success">Add</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          </section>
        </section>  