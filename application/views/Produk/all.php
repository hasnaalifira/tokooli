

	<section id="main-content">
      <section class="wrapper">      	
      	<h3><i class="fa fa-angle-right"></i>Manage Admin</h3>
			<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
					        <h1>Data Produk</h1>
					        <a href="<?php echo base_url()."Produk/add/"; ?>">
	                 			<button type="button" class="btn btn-round btn-info">Tambah Produk</button>
	                 		</a>
					        <table id="example" class="table table-hover">
					            <thead>
									<tr>
										<th>ID Produk</th>
										<th>ID Kategori</th>
										<th>Nama Produk</th>
										<th>Harga</th>
										<th>Stock</th>
										<th>Action</th>
									</tr>
								</thead>
							<tbody>
							<?php foreach ($result as $data) { ?>
				            <tr>
				            	<td><?php echo $data['id_produk']; ?></td>
               					<td><?php echo $data['id_kategori']; ?></td>
               					<td><?php echo $data['nama']; ?></td>
               					<td><?php echo $data['harga']; ?></td>
               					<td><?php echo $data['stock']; ?></td>
	                			<td>
	                				<a href="<?php echo base_url()."Produk/edit/".$data['id_produk']; ?>">
	                				<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
	                			</a>
								  <a href="<?php echo base_url()."Produk/do_delete/".$data['id_produk']; ?>">
                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
		                        </td>
										</tr>
										<?php } ?>
									</tbody>
					        </table>
					    </div>
					</section>
				</section>
    	</body>
