<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

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
	  $this->load->model('KriteriaM');
	  if (!$this->session->has_userdata('id')) {
		redirect('/login');
	  }
  
	}

	public function index()
	{
        $this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Nama Kriteria !']);
        $this->form_validation->set_rules('atribut', 'Atribut', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Atribut !']);

        if ($this->form_validation->run() == false) {
            $query['data'] = $this->KriteriaM->getAll();
            $query['title'] = 'Data Kriteria';
            $query['page'] = 'pages/kriteria/index';
            $this->load->view('layouts/master', $query);
        } else {
            $result = $this->KriteriaM->save();
            if ($result) {
                $this->session->set_flashdata('message', 'Data berhasil di Tambahkan !');
                redirect('Kriteria');
            }
        }
	}

	public function edit()
    {
        $edit = $this->KriteriaM;
        $this->form_validation->set_rules('kode_kriteria', 'Kode', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Kode Kriteria !']);
        $this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Nama Kriteria !']);
        $this->form_validation->set_rules('atribut', 'Atribut', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Atribut !']);
        if ($this->form_validation->run() == false) {
            redirect('Kriteria');
        } else {
            $edit->update();
            $this->session->set_flashdata('message', 'Data berhasil di Update !');
            redirect('Kriteria');
        }
    }

	public function delete($kode_kriteria = null)
    {
        if (!isset($kode_kriteria)) show_404();
        if ($this->KriteriaM->delete_kriteria($kode_kriteria)) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('Kriteria');
        }
    }
    

}
