

	<section id="main-content">
      <section class="wrapper">
      	<?php if($this->session->flashdata('pesan')): ?>
		 <?php echo '<p class="alert alert-success">'.$this->session->flashdata('pesan').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('user_registered')): ?>
		 <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>
      	<h3><i class="fa fa-angle-right"></i>Manage Admin</h3>
			<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
					        <h1>Data Booking</h1>
	                 		<a href="<?php echo base_url()."Admin/register/"; ?>">
	                 			<button type="button" class="btn btn-round btn-info">Tambah Admin</button>
	                 		</a>
					        <table id="example" class="table table-hover">
					            <thead>
									<tr>
										<th>Id Admin</th>
										<th>Nama Lengkap</th>
										<th>Username</th>
						                <th>Action</th>
									</tr>
									</thead>
									<tbody>
										<?php foreach ($result as $data) { ?>
										<tr>
											<td><?php echo $data['id_admin']; ?></td>
							                <td><?php echo $data['nama']; ?></td>
							                <td><?php echo $data['username']; ?></td>
											<td>
											  <a href="<?php echo base_url()."admin/do_delete/".$data['id_admin']; ?>">
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
