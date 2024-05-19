<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BobotKriteriaM extends CI_Model
{
  private $_table = "tb_rel_kriteria";

  public function getAll()
  {
      return $this->db->get($this->_table)->result();
  }

  public function update()
  {
    $post = $this->input->post();
    $this->ID1 = $post['ID1'];
    $this->nilai = $post['nilai'];
    $this->ID2 = $post['ID2'];
    return $this->db->update($this->_table, $this, array('ID1' => $post['ID1'], 'ID2' => $post['ID2']));
  }

  public function	perbandingan_kriteria($data, $kriteria){

		

		#$arr_bobot[] = array();
		$arr_result[] = array();
		foreach ($kriteria as $key => $value) {
			foreach ($data as $keys => $values) {
				
				if($value->kode_kriteria == $values->ID2){
					$arr_bobot[$key][] = $values->nilai;
				}

			}
		}

		

		//<!------------------------------------------------!>
		//---------------------------------------//
		foreach ($kriteria as $key_k => $value) {
			foreach ($kriteria as $key_k2 => $values) {
				$val = 1;
				if($key_k  == $key_k2){  // jika perbandingan dengan kritreria 1 dan 2 sama
					$val = 1;
				}elseif($key_k > $key_k2){
					
					$val = 1 / $arr_bobot[$key_k][$key_k2]; // mengisi nilai perbandingan untuk pecahan
				}else{
					$val =  $arr_bobot[$key_k2][$key_k]; // megisi perbandingan untuk nilai bulat
				}
        
					$arr_result[$key_k][$key_k2] = round($val,5);

			}
		}

					
		//---------------------------------------//
		//---------------------------------------//
		foreach ($arr_result as $key => $value) { // menghitung jumlah kolom
				
				$arr_total[$key] = 0; 

			foreach ($arr_result[$key] as $keys => $values) {
				// var_dump($arr_result[$keys][$key]);
				$arr_total[$key] += round($arr_result[$keys][$key],5); 

			}
		}
						//---------------------------------------//		

		

		
		return array('bobot' => $arr_bobot, 'hasil'=> $arr_result, 'total_bawah' => $arr_total);
		
	}

    function normalisasi_kriteria($hasil, $data, $kriteria){

      $normalisasi = array();
      $arr_jumlah = array();
      $arr_total = array();
      $arr_prio = array();

      $jumlah_arr = count($hasil['hasil']);
      
      foreach ($hasil['hasil'] as $key => $value) {

        $jumlah = 0;
        $priorotas = 0;

        
        

        foreach ($hasil['hasil'][$key] as $keys => $values) {

          $normalisasi[$key][$keys] = round($hasil['hasil'][$key][$keys] / $hasil['total_bawah'][$keys],4);
          $jumlah += round($normalisasi[$key][$keys],4);

        }

        $priorotas = $jumlah / $jumlah_arr;

        $arr_prio[] = round($priorotas,4);
        $arr_jumlah[] = $jumlah;
      }

      //getting CM
      
      $arr_cm = array();
      foreach ($hasil['hasil'] as $key => $value) {
        $cm = 0;
        foreach ($hasil['hasil'][$key] as $keys => $values) {
          
          $cm += $values * $arr_prio[$keys];
          //$arr_cm[] = $values.'*'.$arr_prio[$keys];

        }

        $arr_cm[] = $cm;
      }

      foreach ($arr_prio as $key => $value) {
        
        $arr_cm[$key] = round($arr_cm[$key]/$value,4);
      }


      //getting total overall

      foreach ($normalisasi as $key => $value) {

        $total = 0;

        foreach ($normalisasi[$key] as $keys => $values) {
          
          $total = $normalisasi[$keys][$key] + $total;

        }
        $arr_total[] = round($total,2);
      }

      return array(
        'hasil' => $normalisasi,
        'jumlah' => $arr_jumlah,
        'prioritas' => $arr_prio,
        'total' => $arr_total,
        'bobot' => $hasil['hasil'],
        'vector' => $arr_cm,
      );

    }

    function konsisten($data, $hasil){


      $arr_result[] = array();
      $arr_total = array();
      $jumlah = sizeof($hasil['bobot']);
        
      foreach ($hasil['bobot'] as $key => $value) {
  
          $total = 0;
  
        foreach ($hasil['bobot'][$key] as $keys => $values) {
        
          //$arr_result[$key][$keys] = $hasil['perbandingan'][$key][$keys].'+'.$hasil['prioritas'][$keys];
          $arr_result[$key][$keys] = round($hasil['bobot'][$key][$keys]*$hasil['prioritas'][$keys],4);
          $total += round($arr_result[$key][$keys],4);
        }
        
          $arr_total[] = round($total,4);
  
          //$total = round($total / $hasil['prioritas'][$key],3);
      }
  
      
      $arr_ratio = array();
      $total_ratio = 0;
  
      foreach ($arr_total as $key => $value) {
      
        $total_ratio += $value;
      }
  
      $jumlah_cm = 0;
      foreach ($hasil['vector'] as $key => $value) {
        $jumlah_cm += $value;
      }
  
      $jumlah_cm = $jumlah_cm / $jumlah;
  
  
  
      //$ci = round(($total_ratio - $jumlah) / ($jumlah - 1),4);
      $ci = round(($jumlah_cm - $jumlah) / ($jumlah - 1),4);
      
      if($jumlah == 2){
        $bagi = 0;
      }elseif ($jumlah == 3) {
        $bagi = 0.58;
      }elseif ($jumlah == 4) {
        $bagi = 0.90;
      }elseif($jumlah == 5){
        $bagi = 1.12;
      }elseif($jumlah == 6){
        $bagi = 1.24;
      }elseif($jumlah == 7){
        $bagi = 1.32;
      }else{
        $bagi = 1.41;
      }
  
      $cr = round($ci / $bagi,4);
  
      return array('hasil'=> $arr_result, 
        'total' => $arr_total, 
        //'ratio' => $arr_ratio, 
        //'total_ratio' => $total_ratio,
        'lamda' => $total_ratio,
        'lamdamax' => $jumlah_cm,
        'ci' => $ci,
        'cr' => $cr,
      );
    }

    function FAHP_save($total = array())
    {

        arsort($total);
        $no = 1;
        foreach ($total as $key => $val) {
            $this->db->query("UPDATE tb_kendaraan SET total='$val', rank='$no' WHERE kode_kendaraan='$key'");
            $no++;
        }
    }
}


