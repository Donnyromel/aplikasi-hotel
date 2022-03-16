<?php
class M_Kamar_Tipe extends CI_Model{
	function data_kamar_tipe(){
		$query = $this->db->query("select * from kamar_tipe");
		return $query;
	}
    function simpan(){
        $data = array('id_kamar_tipe' => $this->input->post('id_kamar_tipe'),
        'nama_kamar_tipe' => $this->input->post('nama_kamar_tipe'),
        'fasilitas' => $this->input->post('fasilitas'),
        'gambar' => $this->input->post('gambar'),
        'harga' => $this->input->post('harga'));
        $insert = $this->db->insert('kamar_tipe',$data);
    }
    function data_kamar_tipe_by_id($id){
        $query = $this->db->query("select * from kamar_tipe where id_kamar_tipe = '$id'");
        return $query;
    }
    
    function update(){
        $where = array('id_kamar_tipe'=> $this->input->post('id_kamar_tipe'));
        
        
        $data1 = array(
        'nama_kamar_tipe' => $this->input->post('nama_kamar_tipe'),
        'fasilitas' => $this->input->post('fasilitas'),
        'gambar' => $this->input->post('gambar'),
        'harga' => $this->input->post('harga')
        );
        
       $data2 = array(
        'nama_kamar_tipe' => $this->input->post('nama_kamar_tipe'),
        'fasilitas' => $this->input->post('fasilitas'),
        'gambar' => $this->input->post('gambar'),
        'harga' => $this->input->post('harga'));
            if (empty($this->input->post('nama_kamar_tipe'))) {
                $this->db->where($where);
                $query = $this->db->update('kamar_tipe',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('kamar_tipe',$data1);
            }
    
        if ($query > 0) {
            $this->session->set_flashdata('suksessimpan','Data Kamar_Tiipe Berhasil Diperbaharui');
        }
    }  
    function hapus_data_kamar_tipe($id){
        $query = $this->db->query("delete from kamar_tipe where id_kamar_tipe = '$id'");
        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data kamar_tipe Berhasil Dihapus');
        }else{
        $this->sesssion->set_flashdata('gagalsimpan','Data kamar_tipe Gagal dihapus');    
        }
    }
}
