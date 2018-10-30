<?php
Class Produk extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->model('produkModel');

    }

	public function read(){
		$data['result']=$this->produkModel->GetAll();
		$this->load->view('templates/HeaderAdmin');
        $this->load->view('Produk/all',$data);
        $this->load->view('templates/FooterAdmin');
	} 

	public function add(){		
		$this->load->view('Templates/HeaderAdmin');
		$this->load->view('Produk/add');
		$this->load->view('Templates/FooterAdmin');
	}

	public function do_insert(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required',
			array(
				'required' 		=> 'Pilih %s lah satu aja.'
			));

		
		if ($this->form_validation->run() === FALSE)
	    {
	       	$this->load->view('Templates/HeaderAdmin');
			$this->load->view('Kategori/add');
			$this->load->view('Templates/FooterAdmin');
	    } 
	    else {
	    	$id_kategori 	= $_POST['inputIdKat'];
	        $nama 			= $_POST['nama'];
	        $harga 			= $_POST['harga'];
	        $stock 			= $_POST['stock'];
	       			
			$data_insert	= array(
				'id_kategori' => $id_kategori,
				'nama'	=> $nama,
				'harga'	=> $harga,
				'stock'	=> $stock);
			
			$res = $this->produkModel->InsertData('produk', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('Produk/read');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
		}
	}

	public function do_delete($id_produk){
	  $where  = array('id_produk' => $id_produk);
	  $res  = $this->produkModel->DeleteData('produk',$where);
		  if($res>=1){
		   $this->session->set_flashdata('pesan','Delete Data Sukses');
		   redirect('Produk/read');
		}
	}

		public function edit($id_produk=''){
		$po = $this->produkModel->getedit($id_produk);
		$data = array(
			"id_produk" 	=> $po[0]['id_produk'],
			"id_kategori" 			=> $po[0]['id_kategori'],
			"nama" 			=> $po[0]['nama'],
			"harga" 			=> $po[0]['harga'],
			"stock" 			=> $po[0]['stock']

		);
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required',
			array(
				'required' 		=> 'Isi Nama Produk'
			));
		
			
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/HeaderAdmin');
	        $this->load->view('Produk/edit',$data);
	        $this->load->view('templates/FooterAdmin');
		} else {
			$id_produk		= $_POST['id_produk'];
			$id_kategori	= $_POST['id_kategori'];
			$nama 			= $_POST['nama'];
			$harga 			= $_POST['harga'];
			$stock 			= $_POST['stock'];
			$data_update 	= array(
				'id_kategori'	=> $id_kategori,
				'nama'			=> $nama,
				'harga'			=> $harga,
				'stock'			=> $stock);

		$where = array('id_produk' => $id_produk);
		$res = $this->produkModel->UpdateData('produk',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('Produk/read');
			}	
		}
	}

}