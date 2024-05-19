<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BobotAlternatif extends CI_Controller {

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
      $this->load->model('BerkasM');
      if (!$this->session->has_userdata('id')) {
		redirect('/login');
	  }

	}

	public function index()
	{
        $ALTERNATIF = array();
        $rows = $this->db->query("SELECT kode_kendaraan, nama_kendaraan FROM tb_kendaraan ORDER BY kode_kendaraan")->result();
        foreach ($rows as $row) {
            $ALTERNATIF[$row->kode_kendaraan] = $row->nama_kendaraan;
        }

        $KRITERIA = array();
        $rows = $this->db->query("SELECT kode_kriteria, nama_kriteria, atribut, 0.0 AS bobot FROM tb_kriteria ORDER BY kode_kriteria")->result();
        foreach ($rows as $row) {
            $KRITERIA[$row->kode_kriteria] = $row;
        }

        $kendaraan = array();
        $rows = $this->db->query("SELECT * FROM tb_kendaraan ORDER BY kode_kendaraan")->result();
        foreach ($rows as $row) {
            $kendaraan[$row->kode_kendaraan] = $row;
        }

        $post = $this->input->post();
        if ($post != Null) {
            foreach ($post['nilai'] as $key => $val) {
                $this->db->query("UPDATE tb_rel_kendaraan SET nilai='$val' WHERE ID='$key'");
            }
            $this->session->set_flashdata('message', 'Data berhasil di Update !');
            redirect('BobotAlternatif');
        }



        $query['kendaraan'] = $kendaraan;
        $query['KRITERIA'] = $KRITERIA;
        $query['alternatif'] = $ALTERNATIF;
        $query['data'] = $this->get_hasil_analisa();
		$query['title'] = 'Data Bobot Alternatif';
		$query['page'] = 'pages/bobot/bobot_alternatif';
		$this->load->view('layouts/master', $query);
	}

    function get_hasil_analisa()
    {
        $rows = $this->db->query("SELECT ra.ID, a.kode_kendaraan, k.kode_kriteria, ra.nilai 
            FROM tb_kendaraan a 
                INNER JOIN tb_rel_kendaraan ra ON ra.kode_kendaraan=a.kode_kendaraan
                INNER JOIN tb_kriteria k ON k.kode_kriteria=ra.kode_kriteria
            ORDER BY a.kode_kendaraan, k.kode_kriteria")->result();
        $data = array();
        foreach ($rows as $row) {
            // var_dump($row);
            $data[$row->kode_kendaraan][$row->kode_kriteria] = $row->nilai;
        }
        return $data;
    }

    public function download_file($nama_berkas)
    {
        $this->load->helper('download');
        // $fileinfo = $this->BerkasModel->download($nama_berkas);
        $data = file_get_contents('berkas/'.$nama_berkas);
        force_download($nama_berkas, $data);
    }

    public function verif($kode_berkas = null)
    {
        if (!isset($kode_berkas)) show_404();
        if ($this->BerkasM->verif($kode_berkas)) {
            $this->session->set_flashdata('message', 'Data berhasil di Ubah');
            redirect('BobotAlternatif');
        }
    }

	public function unverif($kode_berkas = null)
    {
        if (!isset($kode_berkas)) show_404();
        if ($this->BerkasM->unverif($kode_berkas)) {
            $this->session->set_flashdata('message', 'Data berhasil di Ubah');
            redirect('BobotAlternatif');
        }
    }

}
