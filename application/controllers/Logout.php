<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

  public function index()
  {
    if ($this->session->has_userdata('id')) {
      $this->session->sess_destroy();
    }
    redirect('/');
  }
}

/* End of file Logout.php */
