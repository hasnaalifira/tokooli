<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukModel extends CI_Model {
	public function GetAll(){
		$this->db->select('*');
		$this->db->from('produk');
		$data=$this->db->get();
		return $data->result_array();
	} 

	public function get_idkat()
	{
		$query = $this->db->get('kategori');
		return $query;
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

	public function getedit($id_produk=''){
		$data = $this->db->query('SELECT * FROM `produk` WHERE '.$id_produk);
		return $data->result_array();
	}

}