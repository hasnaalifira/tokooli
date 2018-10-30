<?php
Class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->model('adminModel');

    }

    public function register(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');

         if($this->form_validation->run() === FALSE){
            $this->load->view('templates/HeaderAdmin');
            $this->load->view('admin/register');
            $this->load->view('templates/FooterAdmin');
            
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->adminModel->register($enc_password);

            // Tampilkan pesan
            $this->session->set_flashdata('user_registered', 'Tambah Admin Berhasil.');

            redirect('Admin/read');
        }

    }

    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('admin/login');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            //$password = $this->input->post('password');
            $id_admin = $this->adminModel->login($username, $password);

            if($id_admin){
                $user_data = array(
                    'id_admin' => $id_admin,
                    'username' => $username,
                    'logged_in' =>true);
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('user_loggedin', 'You are now logged in'.$username);
                //redirect('crud');
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('login_failed', 'Login is invalid');
                redirect('admin/login');
            }       
        }
    }

     public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_admin');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('admin/login');
    }

    public function dashboard(){
        if(!$this->session->userdata('logged_in')) 
            redirect('admin/login');

        $id_admin = $this->session->userdata('id_admin');

        // Dapatkan detail dari User
        $data['user'] = $this->adminModel->get_admin_details( $id_admin );
        //print_r($data);


        $this->load->view('templates/HeaderAdmin',$data);
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates/FooterAdmin');
    }

    public function read(){
        $data['result'] = $this->adminModel->GetAdmin();
        $this->load->view('templates/HeaderAdmin');
        $this->load->view('admin/all',$data);
        $this->load->view('templates/FooterAdmin');
    }    

    public function do_delete($id){
        $where  = array('id_admin' => $id);
        $res    = $this->adminModel->DeleteData('admin',$where);
        if($res>=1){
            $this->session->set_flashdata('pesan','Delete Data Sukses');
            redirect('admin/read');
            }
    }

    public function edit($id_admin=''){
        if(!$this->session->userdata('logged_in')) 
            redirect('admin/login');

        $id_admin = $this->session->userdata('id_admin');

        // Dapatkan detail dari User
        $data['user'] = $this->adminModel->get_admin_details( $id_admin );

        $ad = $this->adminModel->getedit($id_admin);
        $data = array(
            "id_admin"      => $ad[0]['id_admin'],
            "nama"          => $ad[0]['nama'],
            "username"      => $ad[0]['username'],
            "password"      => $ad[0]['password']
        );
        
        $this->load->view('Templates/HeaderAdmin');
        $this->load->view('admin/edit',$data);
        $this->load->view('Templates/FooterAdmin');

        $this->form_validation->set_rules('nama', 'Nama', 'required',
            array(
                'required'      => 'Isi %s lah, hadeeh.'
            ));
        $this->form_validation->set_rules('username', 'username', 'required',
            array(
                'required'      => 'Isi %s lah, hadeeh.'
            ));
        $this->form_validation->set_rules('password', 'Password', 'required',
            array(
                'required'      => 'Isi %s lah, hadeeh.'
            ));
    
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Templates/HeaderAdmin');
            $this->load->view('admin/edit',$data);
            $this->load->view('Templates/FooterAdmin');
        } else {
            $id_admin       = $_POST['id_admin'];
            $nama           = $_POST['nama'];
            $username       = $_POST['username'];
            $enc_password   = md5($this->input->post('password'));
            

            $data_update    = array(
                'id_admin'  => $id_admin,
                'nama'      => $nama,
                'username'  => $username,
                'password'  => $enc_password);

        $where = array('id_admin' => $id_admin);
        $res = $this->adminModel->UpdateData('admin',$data_update,$where);
            if($res>=1){
                $this->session->set_flashdata('pesan','Update Data Sukses');
                redirect('admin/logout');
            }   
        }
    }
}
?>