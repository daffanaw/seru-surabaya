<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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

			$this->form_validation->set_rules('nama_user', 'Nama', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Nama !']);
			$this->form_validation->set_rules('kode_user', 'Kode User', 'trim|required|is_unique[tb_user.kode_user]', ['required' => 'Anda Harus Mengisi Bagian Kode User !',  'is_unique'     => 'Kode User Sudah Ada.']);
			$this->form_validation->set_rules('user', 'Username', 'trim|required|is_unique[tb_user.user]', ['required' => 'Anda Harus Mengisi Bagian Username !',  'is_unique'     => 'Username Sudah Ada.']);
			$this->form_validation->set_rules('pass', 'Password', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Password !']);
		
			if ($this->form_validation->run() == false) {
				$this->load->view('pages/register');
			} else {
				$result = $this->UserM->register();
				if ($result) {
					$this->session->set_flashdata('success', 'Data berhasil di Tambahkan !');
					redirect('Login');
				}
			}
		

		
	}


}
