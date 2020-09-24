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
		$this->form_validation->set_rules('telepon', 'Nomor Telepon', 'required|integer');
		$this->form_validation->set_rules('provider', 'Provider', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('admin/index');
			$this->load->view('templates/footer');
		} else {
			$data['telepon'] = $this->input->post('telepon');
			$data['provider'] = $this->input->post('provider');
			$data['nominal'] = $this->input->post('nominal');
			$this->load->view('templates/header', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('templates/footer', $data);
		}
	}
}
