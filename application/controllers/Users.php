<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
	{
	  parent::__construct();
	  $this->load->model('UserM');
      if (!$this->session->has_userdata('id')) {
		redirect('/login');
	  }
	}

	public function index()
	{
        $this->form_validation->set_rules('nama_user', 'Nama', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Nama !']);
        $this->form_validation->set_rules('kode_user', 'Kode User', 'trim|required|is_unique[tb_user.kode_user]', ['required' => 'Anda Harus Mengisi Bagian Kode User !',  'is_unique'     => 'Kode User Sudah Ada.']);
        $this->form_validation->set_rules('user', 'Username', 'trim|required|is_unique[tb_user.user]', ['required' => 'Anda Harus Mengisi Bagian Username !',  'is_unique'     => 'Username Sudah Ada.']);
        $this->form_validation->set_rules('level', 'Level', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Level !']);
        $this->form_validation->set_rules('pass', 'Password', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Password !']);

        $query['data'] = $this->UserM->getAll();
		$query['title'] = 'Data Users';
		$query['page'] = 'pages/users/index';

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/master', $query);
        } else {
            $result = $this->UserM->save();
            if ($result) {
                $this->session->set_flashdata('message', 'Data berhasil di Tambahkan !');
                redirect('Users');
            }
        }
	}

	public function edit($kode_user = null)
    {
        $edit = $this->UserM;
        $query['title'] = 'Data Users';
        $data['edit'] = $edit->getById($kode_user);
		$this->form_validation->set_rules('nama_user', 'Nama', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Nama !']);
        $this->form_validation->set_rules('user', 'Username', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Username !',  'is_unique'     => 'Username Sudah Ada.']);
        $this->form_validation->set_rules('level', 'Level', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Level !']);
        if ($this->form_validation->run() == false) {
            redirect('Users');
        } else {
            $edit->update();
            $this->session->set_flashdata('message', 'Data berhasil di Update !');
            redirect('Users');
        }
    }

	public function delete($kode_user = null)
    {
        if (!isset($kode_user)) show_404();
        if ($this->UserM->delete_user($kode_user)) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('Users');
        }
    }

}
