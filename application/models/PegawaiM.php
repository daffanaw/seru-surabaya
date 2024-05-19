<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PegawaiM extends CI_Model
{
  private $_table = "tb_pegawai";


  public function getById($kode_pegawai)
  {
    $query = $this->db->get_where($this->_table, array('kode_pegawai' => $kode_pegawai));
    return $query->row();
  }

  public function find_user($user)
  {
    $query = $this->db->get_where('tb_pegawai', array('user' => $user));
    return $query->row();
  }

  public function getAll()
  {
      return $this->db->get($this->_table)->result();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->kode_pegawai = $post["kode_pegawai"];
    $this->nama_pegawai = $post["nama_pegawai"];
    $this->ket_pegawai = $post["ket_pegawai"];
    $this->user = $post["user"];
    $this->pass = password_hash($post["password"], PASSWORD_DEFAULT);

    return $this->db->insert($this->_table, $this);
  }

  public function update()
  {
    $post = $this->input->post();
    $this->kode_pegawai = $post["kode_pegawai"];
    $this->nama_pegawai = $post["nama_pegawai"];
    $this->ket_pegawai = $post["ket_pegawai"];
    $this->user = $post["user"];
    if ($post['pass'] != null) {
      $this->pass = password_hash($post["pass"], PASSWORD_DEFAULT);
    }
    return $this->db->update($this->_table, $this, array('kode_pegawai' => $post['kode_pegawai']));
  }

  public function delete_user($kode_pegawai)
    {
        return $this->db->delete($this->_table, array("kode_pegawai" => $kode_pegawai));
    }




}

/* End of file Mahasiswa_model.php */
