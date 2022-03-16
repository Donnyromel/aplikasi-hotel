<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Reservasi extends CI_Model {

    function data_Reservasi()
    {
      $query = $this->db->query("select * from Reservasi");
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
      $data = array('id_reservasi' => $this->input->post('id_reservasi'),
          'id_tamu' => $this->input->post('id_tamu'),
          'check_in' => $this->input->post('check_in'),
          'time_in' => $this->input->post('time_in'),
          'check_out' => $this->input->post('check_out'),
          'time_out' => $this->input->post('time_out'),
          'biaya' => $this->input->post('biaya'),
        );
      $insert = $this->db->insert('Reservasi',$data);
      if ($insert > 0) {
        $this->session->set_flashdata('suksessimpan', 'Data Reservasi Berhasil Disimpan');
      } else {
        $this->session->set_flashdata('gagalsimpan', 'Data Reservasi Gagal Disimpan');
      }
    }

    function data_Reservasi_by_id($id)
    {
      $query = $this->db->query("select * from Reservasi where id_Reservasi = '$id'");
      return $query;
    }

    function update()
    {
      $where = array('id_reservasi'=> $this->input->post('id_reservasi'));
      $data1 = array('id_tamu'=> $this->input->post('id_tamu'),
        'check_in' => $this->input->post('check_in'), 
        'time_in' => $this->input->post('time_in'),
        'check_out' => $this->input->post('check_out'),
        'time_out' => $this->input->post('time_out'),
        'biaya' => $this->input->post('biaya'));

      if(empty($this->input->post('nama')))
      {
        $this->db->where($where);
        $query = $this->db->update('reservasi',$data1);
      } else {
        $this->db->where($where);
        $query = $this->db->update('reservasi',$data1);
      }

      if($query > 0)
      {
        $this->session->set_flashdata('suksessimpan','Data Reservasi Berhasil Diperbaharui');
      }
    }

    function hapus_data_reservasi($id)
    {
      $query = $this->db->query("delete from Reservasi where id_reservasi = '$id'");
      if($query > 0)
      {
        $this->session->set_flashdata('suksessimpan', 'Data Reservasi Berhasil Dihapus');
      } else {
        $this->session->set_flashdata('gagalsimpan', 'Data Reservasi Gagal Dihapus');
      }
    }
  }