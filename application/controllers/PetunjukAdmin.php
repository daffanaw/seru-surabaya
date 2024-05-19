<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PetunjukAdmin extends CI_Controller
{

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
     * @see https://codeigniter.com/userguide3/general/urls.html
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
        $query['title'] = 'Cara Penggunaan';
        $query['page'] = 'pages/petunjuk/petunjuk_admin';
        $this->load->view('layouts/master', $query);
    }
}
