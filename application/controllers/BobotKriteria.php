<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BobotKriteria extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('KriteriaM');
	  $this->load->model('BobotKriteriaM');
      if (!$this->session->has_userdata('id')) {
		redirect('/login');
	  }
 
	}

	public function index()
    {
        $nilai = array(
            '1' => 'Sama Penting Dengan',
            '2' => 'Mendekati Sedikit Lebih Penting',
            '3' => 'Sedikit Lebih Penting',
            '4' => 'Mendekati Lebih Penting',
            '5' => 'Lebih Penting',
            '6' => 'Mendekati Lebih Penting',
            '7' => 'Sangat Penting',
            '8' => 'Mendekati Mutlak',
            '9' => 'Mutlak Sangat Penting',
        );      
         
        $query['nilai'] = $nilai;
        $query['kriteria_option'] = $this->KriteriaM->getAll();
        $query['title'] = 'Bobot Kriteria';
        $query['page'] = 'pages/bobot/bobot_kriteria';
        $this->load->view('layouts/master', $query);
    }

    function ins_nilai_kriteria(){ // menginput nilai perbandingan kriteria 
		$input = $this->input->post();
		$inputan = array(
			
			'ID1' => $this->input->post('ID1'),
			'nilai' => $this->input->post('nilai'),
			'ID2' => $this->input->post('ID2'),
		);
		$cc = count($inputan['ID1']); // jumlah dari kriteria 1

		/*$this->pre($inputan);
		die;*/

		for ($i=0; $i <= $cc ; $i++) { 
			
			for ($j=$i+1; $j <= $cc ; $j++) { 

				$cek = $this->db->query('select * from tb_rel_kriteria where ID1 = ? and ID2 = ?',array($inputan['ID1'][$i][$j], $inputan['ID2'][$i][$j]))->row();
				if($cek == true){
					$query = $this->db->query('update tb_rel_kriteria set nilai = ?  where ID1 =? and ID2 = ?',array($inputan['nilai'][$i][$j], $inputan['ID1'][$i][$j], $inputan['ID2'][$i][$j]));
				}else{
					$query = $this->db->query('insert into tb_rel_kriteria(ID1, nilai, ID2) values("'.$inputan['ID1'][$i][$j].'","'.$inputan['nilai'][$i][$j].'","'.$inputan['ID2'][$i][$j].'")');	
				}
				
				

			}

		}
		#$query = $this->db->query

		if($query == true){
			echo '<script>alert("Berhasil");</script>';
			redirect('BobotKriteria/perbandingan_kriteria','refresh');
		}else{
			echo '<script>alert("Gagal");</script>';
		}

		$this->pre($input);

		

	}

    public function perbandingan_kriteria()
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
        $query['title'] = 'Perbandingan Kriteria';
        $query['page'] = 'pages/bobot/perbandingan_kriteria';
        $this->load->view('layouts/master', $query);
    }

}
