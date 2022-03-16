<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Transaksi extends CI_Model {

    function data_Transaksi()
    {
      $query = $this->db->query("select * from transaksi");
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
      $data = array('bulan' => $this->input->post('bulan'),
          'tgl_bayar'=> $this->input->post('tgl_bayar'), 'jumlah' => $this->input->post('jumlah'), 'keterangan' => $this->input->post('keterangan'), 'metode' => $this->input->post('metode'));
      $insert = $this->db->insert('transaksi',$data);
    }

    function data_transaksi_by_id($id)
    {
      $query = $this->db->query("select * from transaksi where id_transaksi = '$id'");
      return $query;
    }

    function update()
    {
      $where = array('bulan'=> $this->input->post('bulan'));
      $data1 = array('tgl_bayar'=> $this->input->post('tgl_bayar'), 'jumlah' => $this->input->post('jumlah'), 'keterangan' => $this->input->post('keterangan'), 'metode' => $this->input->post('metode'));

      if(empty($this->input->post('password')))
      {
        $this->db->where($where);
        $query = $this->db->update('transaksi',$data1);
      } else {
        $this->db->where($where);
        $query = $this->db->update('transaksi',$data1);
      }

      if($query > 0)
      {
        $this->session->set_flashdata('suksessimpan','Data transaksi Berhasil Diperbaharui');
      }
    }

    function hapus_data_transaksi($id)
    {
      $query = $this->db->query("delete from transaksi where id_transaksi = '$id'");
      if($query > 0)
      {
        $this->session->set_flashdata('suksessimpan', 'Data transaksi Berhasil Dihapus');
      } else {
        $this->session->set_flashdata('gagalsimpan', 'Data transaksi Gagal Dihapus');
      }
    }
  }
  
