<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	  $this->load->model('KriteriaM');
	  $this->load->model('BobotKriteriaM');
      if (!$this->session->has_userdata('id')) {
		redirect('/login');
	  }
    //   if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'nasabah') {
	// 	redirect('/Dashboard');
	//   }
	}
	public function index()
	{
		$kriteriaT = $this->KriteriaM->getAll();
        $rel_kriteriaT = $this->BobotKriteriaM->getAll();

        $ahp1 = $this->BobotKriteriaM->perbandingan_kriteria($rel_kriteriaT, $kriteriaT );
        $ahp2 = $this->BobotKriteriaM->normalisasi_kriteria($ahp1, $rel_kriteriaT, $kriteriaT);
        $ahp3 = $this->BobotKriteriaM->konsisten($rel_kriteriaT, $ahp2);

        $query['ahp1'] = $ahp1;
        $query['ahp2'] = $ahp2;
        $query['ahp3'] = $ahp3;

		$query['kriteria'] = $kriteriaT;
		$query['jumlah_kendaraan'] = $this->db->from("tb_kendaraan")->count_all_results();
		$query['data'] = $this->KendaraanM->getAll();
        $query['title'] = 'Dashboard';
        $query['page'] = 'pages/dashboard';
		$this->load->view('layouts/master', $query);
	}
}
