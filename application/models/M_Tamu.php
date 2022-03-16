<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tamu extends CI_Model {

    function data_tamu()
    {
      $query = $this->db->query("select * from tamu");
      return $query;
    }

  public function get_where($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  public function get($table)
  {
    return $this->db->get($table);
  }
   function simpan(){
      $data = array('id_tamu' => $this->input->post('id_tamu'),
          'nik'=> $this->input->post('nik'), 'nama_lengkap' => $this->input->post('nama_lengkap'), 'tipe_identitas' => $this->input->post('tipe_identitas'), 'kewarganegaraan' => $this->input->post('kewarganegaraan'), 'alamat' => $this->input->post('alamat'), 'provinsi' => $this->input->post('provinsi'), 'no_telp' => $this->input->post('no_telp'), 'email' => $this->input->post('email'));
      $insert = $this->db->insert('tamu',$data);
    }

    function data_Tamu_by_id($id)
    {
      $query = $this->db->query("select * from Tamu where id_Tamu = '$id'");
      return $query;
    }

    function update()
    {
      $where = array('id_tamu'=> $this->input->post('id_tamu'));
      $data1 = array('nik'=> $this->input->post('nik'), 'nama_lengkap' => $this->input->post('nama_lengkap'), 'tipe_identitas' => $this->input->post('tipe_identitas'), 'kewarganegaraan' => $this->input->post('kewarganegaraan'), 'alamat' => $this->input->post('alamat'), 'provinsi' => $this->input->post('provinsi'), 'no_telp' => $this->input->post('no_telp'), 'email' => $this->input->post('email'));

      if(empty($this->input->post('password')))
      {
        $this->db->where($where);
        $query = $this->db->update('tamu',$data1);
      } else {
        $this->db->where($where);
        $query = $this->db->update('tamu',$data1);
      }

      if($query > 0)
      {
        $this->session->set_flashdata('suksessimpan','Data Tamu Berhasil Diperbaharui');
      }
    }

    function hapus_data_Tamu($id)
    {
      $query = $this->db->query("delete from Tamu where id_Tamu = '$id'");
      if($query > 0)
      {
        $this->session->set_flashdata('suksessimpan', 'Data Tamu Berhasil Dihapus');
      } else {
        $this->session->set_flashdata('gagalsimpan', 'Data Tamu Gagal Dihapus');
      }
    }
  }
  
