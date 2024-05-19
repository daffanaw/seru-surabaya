<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserM extends CI_Model
{
  private $_table = "tb_user";
  private $_tableroles = "roles";

  public function find_id($id)
  {
    $query = $this->db->get_where('tb_user', array('id' => $id));
    return $query->row();
  }

  public function find_user($user)
  {
    $query = $this->db->get_where('tb_user', array('user' => $user));
    return $query->row();
  }

  public function getById($kode_user)
  {
    $query = $this->db->get_where($this->_table, array('kode_user' => $kode_user));
    return $query->row();
  }

  public function getAll()
  {
      return $this->db->get($this->_table)->result();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->kode_user = $post["kode_user"];
    $this->nama_user = $post["nama_user"];
    $this->user = $post["user"];
    $this->level = $post["level"];
    $this->pass = password_hash($post["pass"], PASSWORD_DEFAULT);
    return $this->db->insert($this->_table, $this);
  }

  public function register()
  {
    $post = $this->input->post();
    $this->kode_user = $post["kode_user"];
    $this->nama_user = $post["nama_user"];
    $this->user = $post["user"];
    $this->level = 'pegawai';
    $this->pass = password_hash($post["pass"], PASSWORD_DEFAULT);
    return $this->db->insert($this->_table, $this);
  }

  public function update()
  {
    $post = $this->input->post();
    $this->kode_user = $post["kode_user"];
    $this->nama_user = $post["nama_user"];
    $this->user = $post["user"];
    $this->level = $post["level"];
    if ($post['pass'] != null) {
      $this->pass = password_hash($post["pass"], PASSWORD_DEFAULT);
    }
    return $this->db->update($this->_table, $this, array('kode_user' => $post['kode_user']));
  }

  public function delete_user($kode_user)
    {
        return $this->db->delete($this->_table, array("kode_user" => $kode_user));
    }


}

/* End of file Mahasiswa_model.php */
