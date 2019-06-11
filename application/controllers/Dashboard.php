<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$data = array(
			'title' => 'Dashboard | Simakopp'
		);
        $this->load->view('header', $data);
        $this->load->view('navbar');
		$this->load->view('dashboard');
		$this->load->view('js');
	}	
}