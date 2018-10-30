<?php
Class Order extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->model('OrderModel');

    }

	public function read(){
		$this->load->model('OrderModel');
		$data['result']=$this->OrderModel->GetAll();
		$this->load->view('templates/HeaderAdmin');
        $this->load->view('Order/all',$data);
        $this->load->view('templates/FooterAdmin');
	} 

		public function add(){		
		$this->load->view('Templates/HeaderAdmin');
		$this->load->view('Order/add');
		$this->load->view('Templates/FooterAdmin');
	}

	public function do_insert(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tgl_order', '', 'required',
			array(
				'required' 		=> 'Pilih %s lah satu aja.'
			));

		
		if ($this->form_validation->run() === FALSE)
	    {
	       	$this->load->view('Templates/HeaderAdmin');
			$this->load->view('Order/add');
			$this->load->view('Templates/FooterAdmin');
	    } 
	    else {

	        $tgl_order 			= $_POST['tgl_order'];
	        $total 			= $_POST['total'];
	       			
			$data_insert	= array(
				'tgl_order' => $tgl_order,
				'total'	=> $total);
			
			$res = $this->OrderModel->InsertData('order', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('Order/read');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
		}
	}

	public function do_delete($id){
	  $where  = array('id_order' => $id);
	  $res  = $this->OrderModel->DeleteData('order',$where);
		  if($res>=1){
		   $this->session->set_flashdata('pesan','Delete Data Sukses');
		   redirect('Order/read');
		}
	}

	public function edit($id_order=''){
		$or = $this->OrderModel->getedit($id_order);
		$data = array(
			"id_order" 	=> $or[0]['id_order'],
			"tgl_order" => $or[0]['tgl_order'],
			"total" 	=> $or[0]['total']
		);
		$this->form_validation->set_rules('total', 'total', 'required',
			array(
				'required' 		=> 'Isi Nama Kategori'
			));
		
			
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/HeaderAdmin');
	        $this->load->view('Order/edit',$data);
	        $this->load->view('templates/FooterAdmin');
		} else {
			$id_order	= $_POST['id_order'];
			$tgl_order 	= $_POST['tgl_order'];
			$total 		= $_POST['total'];
			$data_update 	= array(
				'tgl_order'			=> $tgl_order,
				'total'			=> $total);

		$where = array('id_order' => $id_order);
		$res = $this->OrderModel->UpdateData('order',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('Order/read');
			}	
		}
	}
}
