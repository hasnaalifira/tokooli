<?php
Class Kategori extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->model('KategoriModel');

    }
	public function read(){
		$data['result']=$this->KategoriModel->GetAll();
		$this->load->view('templates/HeaderAdmin');
        $this->load->view('Kategori/all',$data);
        $this->load->view('templates/FooterAdmin');
	} 

	public function add(){		
		$this->load->view('Templates/HeaderAdmin');
		$this->load->view('Kategori/add');
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

	        $nama 			= $_POST['nama'];
	       			
			$data_insert	= array('nama'	=> $nama);
			
			$res = $this->KategoriModel->InsertData('kategori', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('Kategori/read');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
		}
	}

	public function do_delete($id){
	  $where  = array('id_kategori' => $id);
	  $res  = $this->KategoriModel->DeleteData('kategori',$where);
		  if($res>=1){
		   $this->session->set_flashdata('pesan','Delete Data Sukses');
		   redirect('Kategori/read');
		}
	}

	public function edit($id=''){
		$kat = $this->KategoriModel->getedit($id);
		$data = array(
			"id_kategori" 	=> $kat[0]['id_kategori'],
			"nama" 			=> $kat[0]['nama']
		);
		$this->form_validation->set_rules('nama', 'Nama', 'required',
			array(
				'required' 		=> 'Isi Nama Kategori'
			));
		
			
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/HeaderAdmin');
	        $this->load->view('Kategori/edit',$data);
	        $this->load->view('templates/FooterAdmin');
		} else {
			$id		= $_POST['id_kategori'];
			$nama 	= $_POST['nama'];
			$data_update 	= array(
				'nama'			=> $nama);

		$where = array('id_kategori' => $id);
		$res = $this->KategoriModel->UpdateData('kategori',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('Kategori/read');
			}	
		}
	}
}
