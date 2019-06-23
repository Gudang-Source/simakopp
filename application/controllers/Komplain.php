<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain extends CI_Controller {
	
	public function __construct() {		
		parent::__construct();				
		$this->load->model('m_aset');		
	}

	public function index()	{
		$data = array(
			'title' => 'Aset | Simakopp',
			'ast' => $this->m_aset->data()
		);
        $this->load->view('header', $data);
        $this->load->view('navbar');
		$this->load->view('komplain');
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