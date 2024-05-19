<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BerkasM extends CI_Model
{
  private $_table = "berkas";

  public function getAll()
  {
      return $this->db->select('*')->from('berkas')->join('tb_kendaraan', 'berkas.id_kendaraan = tb_kendaraan.kode_kendaraan')->get()->result();
  }

  public function getById($id_berkas)
    {
        $query = $this->db->get_where($this->_table, array('id_berkas' => $id_berkas));
        return $query->row();
    }

  public function getByIdNasabah($id_kendaraan)
    {
        $query = $this->db->get_where($this->_table, array('id_kendaraan' => $id_kendaraan));
        return $query->row();
    }

  public function save()
  {
    $post = $this->input->post();
    $id_kendaraan = $this->session->userdata('id');
    $nama_file = $_FILES['file'];
    $nama_files = $this->upload_file($nama_file, 'berkas');
    $data = array(
        'id_kendaraan' => $id_kendaraan,
        'status' => 1,
        'file' => $nama_files
    );
    return $this->db->insert($this->_table, $data);
  }

  function upload_file($file, $type)
    {
        $file_name = rand(100, 999) . $file['name'];
        move_uploaded_file($file['tmp_name'], 'berkas/' . $file_name);
        return $file_name;
    }

  public function update()
  {
    $post = $this->input->post();
    $id_berkas = $post["id_berkas"];
    $id_kendaraan = $this->session->userdata('id');
    if (isset($_FILES['file'])) {
        $nama_file = $_FILES['file'];
        $nama_files = $this->upload_file($nama_file, 'berkas');

        $getData = $this->getById($post['id_berkas']);
        $this->del_file($getData->file, 'berkas');
        $data = array(
            'id_berkas' => $id_berkas,
            'id_kendaraan' => $id_kendaraan,
            'status' => 1,
            'file' => $nama_files
        );
        return $this->db->update($this->_table, $data, array('id_berkas' => $post['id_berkas']));
    }
    // $data = array(
    //     'id_berkas' => $id_berkas,
    //     'id_kendaraan' => $id_kendaraan,
    //     'nama_berkas' => $nama_berkas,
    // );
    // return $this->db->update($this->_table, $data, array('id_berkas' => $post['id_berkas']));
  }

  public function delete_kriteria($kode_kriteria)
    {
      $this->db->query("DELETE FROM tb_rel_kriteria WHERE ID1='$kode_kriteria' OR ID2='$kode_kriteria'");
      $this->db->query("DELETE FROM tb_rel_nasabah WHERE kode_kriteria='$kode_kriteria'");
        return $this->db->delete($this->_table, array("kode_kriteria" => $kode_kriteria));
    }

    function del_file($file, $type)
    {
        $file_name = 'berkas/' . $file;
        if (is_file($file_name))
            unlink($file_name);
    }

    public function verif($id_berkas)
    {
      $this->status = 2;
      return $this->db->update($this->_table, $this, array('id_berkas' => $id_berkas));
    }

  public function unverif($id_berkas)
    {
      $this->status = 10;
      return $this->db->update($this->_table, $this, array('id_berkas' => $id_berkas));
    }

}

/* End of file Mahasiswa_model.php */
