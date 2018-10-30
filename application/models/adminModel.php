<?php
class AdminModel extends CI_Model{
   public function register($enc_password){
       // Array data user
       $data = array(
           'nama' => $this->input->post('nama'),
           'username' => $this->input->post('username'),
           'password' => $enc_password
       );

       // Insert user
       return $this->db->insert('admin', $data);
   }

   public function login($username, $password){
       // Validasi
       $this->db->where('username', $username);
       $this->db->where('password', $password);

       $result = $this->db->get('admin');


       if($result->num_rows() == 1){
           return $result->row(0)->id_admin;
       } else {
           return false;
       }
   }

   function get_admin_details($id_admin)
    {
        $this->db->select('*');
        $this->db->where('id_admin', $id_admin);

        $result = $this->db->get('admin');

        if($result->num_rows() == 1){
            return $result->row(0);
        } else {
            return false;
        }
    }

    public function GetAdmin()
    {
      $this->db->select('*');
      $this->db->from('admin');
      $data=$this->db->get();
      return $data->result_array();
    }

    public function DeleteData($tabelNama,$where){
    $res = $this->db->delete($tabelNama,$where);
    return $res;
    }

    public function getedit($id_admin=''){
    $data = $this->db->query('SELECT * FROM admin where id_admin = '.$id_admin);
    return $data->result_array();
  }

  public function UpdateData($tabelNama,$data,$where){
    $res = $this->db->update($tabelNama,$data,$where);
    return $res;
  }
}
?>