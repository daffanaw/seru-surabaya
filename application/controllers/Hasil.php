<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

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
	  $this->load->model('BobotKriteriaM');
      if (!$this->session->has_userdata('id')) {
		redirect('/login');
	  }
	}

	public function index()
	{
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
        $kriteriaT = $this->KriteriaM->getAll();
        $rel_kriteriaT = $this->BobotKriteriaM->getAll();

        $ahp1 = $this->BobotKriteriaM->perbandingan_kriteria($rel_kriteriaT, $kriteriaT );
        // var_dump($ahp1['hasil']);
        $matriks_fahp = $this->FAHP_get_relkriteria($ahp1['hasil']); //memanggil fungsi FAHP_get_relkriteria
        $lmu = $this->FAHP_get_lmu($matriks_fahp); //memanggil fungsi FAHP_get_lmu        
        $total_lmu = $this->FAHP_get_total_lmu($lmu); //memanggil fungsi FAHP_get_total_lmu 
        $Si = $this->FAHP_get_Si($lmu, $total_lmu); //memanggil fungsi FAHP_get_Si   
        $data = $this->get_hasil_analisa();
        
        $query['data'] = $data;
        $query['kendaraan'] = $kendaraan;
        $query['kriteria'] = $kriteriaT;
        $query['ahp1'] = $ahp1;
        $query['matriks_fahp'] = $matriks_fahp;
        $query['lmu'] = $lmu;
        $query['total_lmu'] = $total_lmu;
        $query['Si'] = $Si;
		$query['title'] = 'Penghitungan';
		$query['page'] = 'pages/penghitungan/hasil';
		$this->load->view('layouts/master', $query);
	}
    
    /**
 * mengambil nilai perbandingan kriteria dari database 
 * kemudian menyimpan dalam array
 */
    function AHP_get_relkriteria()
    {
        $data = array();
        $rows = $this->db->query("SELECT k.nama_kriteria, rk.ID1, rk.ID2, nilai 
            FROM tb_rel_kriteria rk INNER JOIN tb_kriteria k ON k.kode_kriteria=rk.ID1 
            ORDER BY ID1, ID2")->result();
        foreach ($rows as $row) {
            $data[$row->ID1][$row->ID2] = $row->nilai;
        }
        return $data;
    }

    function FAHP_get_triangular($nilai)
    {
        $fahp_triangular = array(
            '1' => array(
                'name' => 'Sama penting dengan',
                'tfn' => array(1, 1, 1),
                'rec' => array(1, 1, 1),
            ),
            '2' => array(
                'name' => 'Mendekati sedikit lebih penting dari',
                'tfn' => array(1, 1, 3 / 2),
                'rec' => array(2 / 3, 1, 1),
            ),
            '3' => array(
                'name' => 'Sedikit lebih penting dari',
                'tfn' => array(1, 3 / 2, 2),
                'rec' => array(1 / 2, 2 / 3, 1),
            ),
            '4' => array(
                'name' => 'Mendekati lebih penting dari',
                'tfn' => array(3 / 2, 2, 5 / 2),
                'rec' => array(2 / 5, 1 / 2, 2 / 3),
            ),
            '5' => array(
                'name' => 'Lebih penting dari',
                'tfn' => array(2, 5 / 2, 3),
                'rec' => array(1 / 3, 2 / 5, 1 / 2),
            ),
            '6' => array(
                'name' => 'Mendekati sangat penting dari',
                'tfn' => array(5 / 2, 3, 7 / 2),
                'rec' => array(2 / 7, 1 / 3, 2 / 5),
            ),
            '7' => array(
                'name' => 'Sangat penting dari',
                'tfn' => array(3, 7 / 2, 4),
                'rec' => array(1 / 4, 2 / 7, 1 / 3),
            ),
            '8' => array(
                'name' => 'Mendekati mutlak dari',
                'tfn' => array(7 / 2, 4, 9 / 2),
                'rec' => array(2 / 9, 1 / 4, 2 / 7),
            ),
            '9' => array(
                'name' => 'Mutlak sangat penting dari',
                'tfn' => array(4, 9 / 2, 9 / 2),
                'rec' => array(2 / 9, 2 / 9, 1 / 4),
            ),
        );

        $keys = array_keys($fahp_triangular);
        $arr = array();
        foreach ($keys as $key) {
            $arr[round(1 / $key, 5) . ""] = $key;
        }
        
        if (array_key_exists($nilai, $fahp_triangular)) {
            return $fahp_triangular[$nilai]['tfn'];
        } else {
            return $fahp_triangular[$arr[round($nilai, 5) . ""]]['rec'];
        }
    }

        /**
     * mengambil nilai triangular berdasarkan nilai perbandingan kriteria
     */
    function FAHP_get_relkriteria($matriks = array())
    {
        $arr = array();
        
        foreach ($matriks as $key => $val) {
            foreach ($val as $k => $v) {
                $arr[$key][$k] = $this->FAHP_get_triangular($v);
            }
        }
        return $arr;
    }

    /**
     * mencari nilai l, m, u
     */
    function FAHP_get_lmu($matriks = array())
    {
        $arr = array();
        foreach ($matriks as $key => $val) {
            foreach ($val as $k => $v) {
                $arr[$key][0] += $v[0];
                $arr[$key][1] += $v[1];
                $arr[$key][2] += $v[2];
            }
        }
        //print_r($arr);
        return $arr;
    }

    /**
     * mencari total nilai lmu
     */
    function FAHP_get_total_lmu($total_baris = array())
    {
        $arr = array();
        foreach ($total_baris as $val) {
            $arr[0] += $val[0];
            $arr[1] += $val[1];
            $arr[2] += $val[2];
        }
        return $arr;
    }

    /**
     * mencari nilai sintesis
     */
    function FAHP_get_Si($lmu, $total_lmu)
    {

        $arr = array();
        foreach ($lmu as $key => $val) {
            $arr[$key][0] = $val[0] / $total_lmu[2];
            $arr[$key][1] = $val[1] / $total_lmu[1];
            $arr[$key][2] = $val[2] / $total_lmu[0];
        }
        return $arr;
    }

    /**
     * mengambil nilai kendaraan dari database 
     * kemudian menyimpan dalam array
     */
    function FAHP_get_rel_kendaraan()
    {
        $rows = $this->db->query("SELECT * FROM tb_rel_kendaraan r INNER JOIN tb_kendaraan p ON p.kode_kendaraan=r.kode_kendaraan
             ORDER BY p.kode_kendaraan, kode_kriteria")->result();
        $matriks = array();
        foreach ($rows as $row) {
            $matriks[$row->kode_kendaraan][$row->kode_kriteria] = $row->nilai;
        }
        return $matriks;
    }

    /**
     * option untuk nilai kriteria
     */
    function AHP_get_nilai_option($selected = '')
    {
        $nilai = array(
            '1' => 'Sama penting dengan',
            '2' => 'Mendekati sedikit lebih penting dari',
            '3' => 'Sedikit lebih penting dari',
            '4' => 'Mendekati lebih penting dari',
            '5' => 'Lebih penting dari',
            '6' => 'Mendekati sangat penting dari',
            '7' => 'Sangat penting dari',
            '8' => 'Mendekati mutlak dari',
            '9' => 'Mutlak sangat penting dari',
        );
        $a = '';
        foreach ($nilai as $key => $value) {
            if ($selected == $key)
                $a .= "<option value='$key' selected>$key - $value</option>";
            else
                $a .= "<option value='$key'>$key - $value</option>";
        }
        return $a;
    }

    /**
     * mencari total kolom dari matriks
     */
    function AHP_get_total_kolom($matriks = array())
    {
        $total = array();
        foreach ($matriks as $key => $value) {
            foreach ($value as $k => $v) {
                $total[$k] += $v;
            }
        }
        return $total;
    }

    /**
     * menormalkan matriks
     */
    function AHP_normalize($matriks = array(), $total = array())
    {

        foreach ($matriks as $key => $value) {
            foreach ($value as $k => $v) {
                $matriks[$key][$k] = $matriks[$key][$k] / $total[$k];
            }
        }
        return $matriks;
    }

    /**
     * mencari nilai rata-rata matriks
     */
    function AHP_get_rata($normal)
    {
        $rata = array();
        foreach ($normal as $key => $value) {
            $rata[$key] = array_sum($value) / count($value);
        }
        return $rata;
    }

    /**
     * perkalian matriks
     */
    function AHP_mmult($matriks = array(), $rata = array())
    {
        $data = array();

        $rata = array_values($rata);

        foreach ($matriks as $key => $value) {
            $no = 0;
            foreach ($value as $k => $v) {
                $data[$key] += $v * $rata[$no];
                $no++;
            }
        }

        return $data;
    }

    /**
     * mengambil nilai konsistensi
     */
    function AHP_consistency_measure($matriks, $rata)
    {
        $matriks = $this->AHP_mmult($matriks, $rata);
        foreach ($matriks as $key => $value) {
            $data[$key] = $value / $rata[$key];
        }
        return $data;
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
}
