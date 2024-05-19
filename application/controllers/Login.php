<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('UserM');
	  $this->load->model('KendaraanM');
	  $this->load->model('PegawaiM');
	//   if ($this->session->has_userdata('id')) {
	// 	redirect('/Dashboard');
	//   }
	}

	public function index()
	{
		$data = $this->input->post();
		if (!empty($data)) {
		$result = $this->UserM->find_user($data['user']);
			if (!empty($result) && password_verify($data['pass'], $result->pass)) {
				$sessionData = array('user' => $result->user, 'id' => $result->kode_user, 'level' => $result->level);
				$this->session->set_userdata($sessionData);
				return redirect('Dashboard');
			} 
			$this->session->set_flashdata('message', 'Username / Password anda salah');
		}

		$this->load->view('pages/login');
	}
}
