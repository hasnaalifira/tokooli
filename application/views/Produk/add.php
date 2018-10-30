    <section id="main-content">
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Tambah Produk</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <?php echo validation_errors(); ?>
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Form Add</h4>
                      <?php echo form_open('Produk/do_insert', array('class' => 'form-horizontal style-form','needs-validation','novalidate' => ''));?>
                          <form>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" for="inputKotaAsal">Kategori</label>
                            <?php $idkat = $this->produkModel->get_idkat(); ?>
                            <select class="form-control" name="inputIdKat">
                            <?php foreach($idkat->result_array() as $idkat) { ?>
                            <option value="<?php echo $idkat['id_kategori']; ?>"><?php echo $idkat['nama']; ?></option>
                            <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-10">
                                  <input type="text" name="harga" class="form-control" placeholder="Harga">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stock</label>
                              <div class="col-sm-10">
                                  <input type="text" name="stock" class="form-control" placeholder="Stock">
                              </div>
                          </div>
                          <button type="submit" class="btn btn-round btn-success">Add</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          </section>
        </section>  