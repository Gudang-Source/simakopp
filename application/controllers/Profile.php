<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function __construct() {		
		parent::__construct();				
		$this->load->model('m_aset');		
	}

	public function index()	{
		$data = array(
			'title' => 'Profile | Simakopp',
			'ast' => $this->m_aset->data()
		);
        $this->load->view('header', $data);
        $this->load->view('navbar');
		$this->load->view('profile');
		$this->load->view('js');
	}	

	public function tambah()	{
		$data = array(
			'title' => 'Tambah Aset | Simakopp',
			'ast' => $this->m_aset->data()
		);
        $this->load->view('header', $data);
        $this->load->view('navbar');
		$this->load->view('tambah_aset');
		$this->load->view('js');
	}
	
}