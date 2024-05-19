<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KendaraanM extends CI_Model
{
  private $_table = "tb_kendaraan";


  public function getById($kode_kendaraan)
  {
    $query = $this->db->get_where($this->_table, array('kode_kendaraan' => $kode_kendaraan));
    return $query->row();
  }

  public function find_user($user)
  {
    $query = $this->db->get_where('tb_kendaraan', array('user' => $user));
    return $query->row();
  }

  public function find_kendaraan($nama_kendaraan)
  {
    $query = $this->db->get_where('tb_kendaraan', array('nama_kendaraan' => $nama_kendaraan));
    return $query->row();
  }

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function save()
  {
    $post = $this->input->post();
    $nama_file = $_FILES['foto'];
    $this->foto = $this->_uploadImage($nama_file, 'berkas');
    // $this->kode_kendaraan = $post["kode_kendaraan"];
    $this->nama_kendaraan = $post["nama_kendaraan"];
    $this->rating = $post["rating"];
    $this->alamat = $post["alamat"];
    $this->jam_operasi = $post["jam_operasi"];
    $this->deskripsi_tempat = $post["deskripsi_tempat"];
    $this->contact = $post["contact"];
    $this->kepopuleran = $post["kepopuleran"]; 
    $this->rasio_harga = $post["rasio_harga"];

    return $this->db->insert($this->_table, $this);
  }

  private function _uploadImage($file, $type)
  {
    $file_name = rand(100, 999) . $file['name'];
        move_uploaded_file($file['tmp_name'], 'uploads/kendaraan/' . $file_name);
        return $file_name;
  }

  public function update()
  {
    $post = $this->input->post();
    $this->kode_kendaraan = $post["kode_kendaraan"];
    $this->nama_kendaraan = $post["nama_kendaraan"];
    $this->rating = $post["rating"];
    $this->alamat = $post["alamat"];
    $this->jam_operasi = $post["jam_operasi"];
    $this->deskripsi_tempat = $post["deskripsi_tempat"];
    $this->contact = $post["contact"];
    $this->kepopuleran = $post["kepopuleran"];
    $this->rasio_harga = $post["rasio_harga"];
    $nama_file = $_FILES['foto'];
    $this->foto = $this->_uploadImage($nama_file, 'berkas');

    return $this->db->update($this->_table, $this, array('kode_kendaraan' => $post['kode_kendaraan']));
  }

  public function delete_user($kode_kendaraan)
    {
        $this->db->delete('tb_rel_kendaraan', array("kode_kendaraan" => $kode_kendaraan));
        return $this->db->delete($this->_table, array("kode_kendaraan" => $kode_kendaraan));
    }

    public function verif($kode_kendaraan)
    {
      $this->verifikasi = 1;
      return $this->db->update($this->_table, $this, array('kode_kendaraan' => $kode_kendaraan));
    }

  public function unverif($kode_kendaraan)
    {
      $this->verifikasi = 0;
      return $this->db->update($this->_table, $this, array('kode_kendaraan' => $kode_kendaraan));
    }

}

/* End of file Mahasiswa_model.php */
