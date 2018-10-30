

	<section id="main-content">
      <section class="wrapper">      	
      	<h3><i class="fa fa-angle-right"></i>Manage Admin</h3>
			<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
					        <h1>Data Order</h1>
					        <a href="<?php echo base_url()."Order/add/"; ?>">
	                 			<button type="button" class="btn btn-round btn-info">Tambah Order</button>
	                 		</a>
					        <table id="example" class="table table-hover">
					            <thead>
									<tr>
										<th>ID Order</th>
										<th>Tanggal Order</th>
										<th>Total</th>
										<th>Action</th>
									</tr>
								</thead>
							<tbody>
							<?php foreach ($result as $data) { ?>
				            <tr>
               					<td><?php echo $data['id_order']; ?></td>
               					<td><?php echo $data['tgl_order']; ?></td>
               					<td><?php echo $data['total']; ?></td>
	                			<td>
	                				<a href="<?php echo base_url()."Order/edit/".$data['id_order']; ?>">
	                				<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
	                			</a>
								  <a href="#">
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
