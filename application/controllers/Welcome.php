<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//library, helper, model
	public function __construct() {
        parent::__construct();
        $this->load->model('m_pengguna');        
    }
	
	public function index()
	{
		$data = array(
			'title' => 'Home | Simakopp'
		);
		$this->load->view('header', $data);
		$this->load->view('welcome');
		$this->load->view('js');
	}

	public function login()
	{
		$data = array(
			'title' => 'Login | Simakopp'
		);
		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('js');
	}

	//check authentifikasi
	public function checkAuth() {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $loginPengguna = $this->m_pengguna->checkLogin($username, $password);           

            if (!empty($loginPengguna)) {
            	$this->session->set_userdata($loginPengguna);
                $this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('gagal', 'maaf, username / password kamu salah !');
                redirect('welcome/login');
            }
            
        } else {
            $this->session->set_flashdata('gagal', 'maaf, username / password kamu salah !');
            redirect('welcome/login');
        }
    }
    
    //logout
    public function logout() {
    	$this->session->sess_destroy();
    	redirect('welcome/login');
	}

}
