<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {

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
	  $this->load->model('KendaraanM');
      if (!$this->session->has_userdata('id')) {
		redirect('/login');
	  }
	}

	public function index()
	{
        // $this->form_validation->set_rules('kode_kendaraan', 'Kode', 'trim|required|is_unique[tb_kendaraan.kode_kendaraan]', ['required' => 'Anda Harus Mengisi Bagian Kode kendaraan !', 'is_unique' => 'Kode Sudah Digunakan']);
        $this->form_validation->set_rules('nama_kendaraan', 'Nama kendaraan', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Nama kendaraan !']);

        $query['data'] = $this->KendaraanM->getAll();
        $query['title'] = 'Data Tempat Wisata';
        $query['page'] = 'pages/kendaraan/index';
        
        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/master', $query);
        } else {
            $result = $this->KendaraanM->save();
            $post = $this->input->post();
            $find = $this->KendaraanM->find_kendaraan($post['nama_kendaraan']);
            $kode = $find->kode_kendaraan;
            $this->db->query("INSERT INTO tb_rel_kendaraan(kode_kendaraan, kode_kriteria, nilai) SELECT '$kode', kode_kriteria, 1 FROM tb_kriteria");
            if ($result) {
                $this->session->set_flashdata('message', 'Data berhasil di Tambahkan !');
                redirect('kendaraan');
            }
        }
		
	}


	public function edit($kode_kendaraan = null)
    {
        $edit = $this->KendaraanM;
        $this->form_validation->set_rules('kode_kendaraan', 'Kode', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Kode kendaraan !', 'is_unique' => 'Kode Sudah Digunakan']);
        $this->form_validation->set_rules('nama_kendaraan', 'Nama kendaraan', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Nama kendaraan !']);
      
        if ($this->form_validation->run() == false) {
            redirect('kendaraan');
        } else {
            $edit->update();
            $this->session->set_flashdata('message', 'Data berhasil di Update !');
            redirect('kendaraan');
        }
    }

	public function delete($kode_kendaraan = null)
    {
        if (!isset($kode_kendaraan)) show_404();
        if ($this->KendaraanM->delete_user($kode_kendaraan)) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('kendaraan');
        }
    }

	public function verif($kode_kendaraan = null)
    {
        if (!isset($kode_kendaraan)) show_404();
        if ($this->KendaraanM->verif($kode_kendaraan)) {
            $this->session->set_flashdata('message', 'Data berhasil di Ubah');
            redirect('kendaraan');
        }
    }

	public function unverif($kode_kendaraan = null)
    {
        if (!isset($kode_kendaraan)) show_404();
        if ($this->KendaraanM->unverif($kode_kendaraan)) {
            $this->session->set_flashdata('message', 'Data berhasil di Ubah');
            redirect('kendaraan');
        }
    }
    

}
