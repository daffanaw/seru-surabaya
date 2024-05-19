<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KriteriaM extends CI_Model
{
  private $_table = "tb_kriteria";

  public function getAll()
  {
      return $this->db->get($this->_table)->result();
  }

  public function save()
  {
    $post = $this->input->post();
    $kode = $post["kode_kriteria"];
    $this->nama_kriteria = $post["nama_kriteria"];
    $this->atribut = $post["atribut"];

    $this->db->insert($this->_table, $this);

    $find = $post["nama_kriteria"];
    $get = $this->db->get_where('tb_kriteria', array('nama_kriteria' => $find))->row();
    $kode = $get->kode_kriteria;

    // $this->db->query("INSERT INTO tb_rel_kriteria(ID1, ID2, nilai) SELECT '$kode', kode_kriteria, 1 FROM tb_kriteria");
    // $this->db->query("INSERT INTO tb_rel_kriteria(ID1, ID2, nilai) SELECT kode_kriteria, '$kode', 1 FROM tb_kriteria WHERE kode_kriteria<>'$kode'");
    return $this->db->query("INSERT INTO tb_rel_kendaraan(kode_kendaraan, kode_kriteria, nilai) SELECT kode_kendaraan, '$kode', 1  FROM tb_kendaraan");
  }

  public function update()
  {
    $post = $this->input->post();
    $this->kode_kriteria = $post["kode_kriteria"];
    $this->nama_kriteria = $post["nama_kriteria"];
    $this->atribut = $post["atribut"];
    
    return $this->db->update($this->_table, $this, array('kode_kriteria' => $post['kode_kriteria']));
  }

  public function delete_kriteria($kode_kriteria)
    {
      $this->db->query("DELETE FROM tb_rel_kriteria WHERE ID1='$kode_kriteria' OR ID2='$kode_kriteria'");
      $this->db->query("DELETE FROM tb_rel_kendaraan WHERE kode_kriteria='$kode_kriteria'");
        return $this->db->delete($this->_table, array("kode_kriteria" => $kode_kriteria));
    }


}

/* End of file Mahasiswa_model.php */
