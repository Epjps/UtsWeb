<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title']='List Mahasiswa';
		$data['mahasiswa']= $this->dashboard_model->getAllmahasiswa(); 
		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->dashboard_model->cariDataMahasiswa();
		}
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */