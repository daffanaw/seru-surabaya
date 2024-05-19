<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateProfile extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('UserM');
	  $this->load->model('KendaraanM');
	  $this->load->model('PegawaiM');
	  $this->load->model('BerkasM');
	//   if ($this->session->has_userdata('id')) {
	// 	redirect('/Dashboard');
	//   }
	}

	public function index()
	{
       
		$this->form_validation->set_rules('nama_kendaraan', 'Nama kendaraan', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Nama kendaraan !']);
        $this->form_validation->set_rules('user', 'Username', 'trim|required', ['required' => 'Anda Harus Mengisi Bagian Username !']);
        $this->form_validation->set_rules('pass', 'Password', 'trim', ['required' => 'Anda Harus Mengisi Bagian Password !']);
        $this->form_validation->set_rules('pass2', 'Password', 'trim|matches[pass]', ['required' => 'Anda Harus Mengisi Bagian Password !']);

        $kendaraan = array();
        $rows = $this->db->query("SELECT * FROM tb_kendaraan ORDER BY kode_kendaraan")->result();
        foreach ($rows as $row) {
            $kendaraan[$row->kode_kendaraan] = $row;
        }
        $query['data'] = $this->KendaraanM->getById($this->session->userdata('id'));
        $query['cekKendaraan'] = $this->BerkasM->getByIdKendaraan($this->session->userdata('id'));
        $query['title'] = 'Data kendaraan';
        $query['page'] = 'pages/update_profile/index';
        $query['kendaraan'] = $kendaraan;
        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/master', $query);
        } else {
            $result = $this->KendaraanM->update();
            if ($result) {
                $this->session->set_flashdata('message', 'Data berhasil di Update !');
                redirect('UpdateProfile');
            }
        }
	}

    public function uploadBerkas()
    {
        $post = $this->input->post();
        $findID = $this->BerkasM->getById($post["id_berkas"]);
        if ($findID == NULL) {
            $result = $this->BerkasM->save();
            if ($result) {
                $this->session->set_flashdata('messages', 'Berkas berhasil di Tambahkan !');
                redirect('UpdateProfile');
            }
        } elseif($findID != NULL) {
            $result = $this->BerkasM->update();
            if ($result) {
                $this->session->set_flashdata('messages', 'Berkas berhasil di Update !');
                redirect('UpdateProfile');
            }
        }
    }

    function download_file()
    {
        $nama_berkas = 'data.xlsx';
        $this->load->helper('download');
        // $fileinfo = $this->BerkasModel->download($nama_berkas);
        $data = file_get_contents($nama_berkas);
        force_download($nama_berkas, $data);
    }
}
