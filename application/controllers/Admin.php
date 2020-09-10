<?php

use phpDocumentor\Reflection\Types\This;

class Admin extends CI_Controller
{

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->library('form_validation');
	// }

	public function index()
	{
		$data['telepon'] = $this->input->post('telepon');
		$data['provider'] = $this->input->post('provider');
		$data['nominal'] = $this->input->post('nominal');

		$this->load->view('templates/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer', $data);
	}
}
