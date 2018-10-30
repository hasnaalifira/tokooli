<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {
	public function GetAll(){
		$this->db->select('*');
		$this->db->from('kategori');
		$data=$this->db->get();
		return $data->result_array();
	}

	public function InsertData($tabelNama,$data){
		$res = $this->db->insert($tabelNama,$data);
		return $res;
	}

	public function DeleteData($tabelNama,$data){
		$res = $this->db->delete($tabelNama,$data);
		return $res;
	} 

	public function UpdateData($tabelNama,$data,$where){
		$res = $this->db->update($tabelNama,$data,$where);
		return $res;
	}

	public function getedit($id=''){
		$data = $this->db->query('SELECT * FROM kategori where id_kategori = '.$id);
		return $data->result_array();
	}
}