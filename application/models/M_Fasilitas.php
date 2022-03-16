<?php
class M_Fasilitas extends CI_Model{
	function data_fasilitas(){
		$query = $this->db->query("select * from fasilitas");
		return $query;
	}
    function simpan(){
        $data = array('id_fasilitas' => $this->input->post('id_fasilitas'),
                'nama_fasilitas' => $this->input->post('nama_fasilitas'),
                'gambar' => $this->input->post('gambar'),
                'keterangan' => $this->input->post('keterangan'));
        $insert = $this->db->insert('fasilitas',$data);
    }
    function data_Fasilitas_by_id($id){
        $query = $this->db->query("select * from fasilitas where id_fasilitas = '$id'");
        return $query;
    }
    
    function update(){
        $where = array('id_fasilitas'=> $this->input->post('id_fasilitas'));
        
        
        $data1 = array(
        'nama_fasilitas' => $this->input->post('nama_fasilitas'),
        'gambar' => $this->input->post('gambar')
        );
        
       $data2 = array(
        'nama_fasilitas' => $this->input->post('nama_fasilitas'),
        'gambar' => $this->input->post('gambar'));
            if (empty($this->input->post('nama_fasilitas'))) {
                $this->db->where($where);
                $query = $this->db->update('fasilitas',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('fasilitas',$data1);
            }
    
        if ($query > 0) {
            $this->session->set_flashdata('suksessimpan','Data Fasilitas Berhasil Diperbaharui');
        }
    }  
    function hapus_data_fasilitas($id){
        $query = $this->db->query("delete from Fasilitas where id_Fasilitas = '$id'");
        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data Fasilitas Berhasil Dihapus');
        }else{
        $this->sesssion->set_flashdata('gagalsimpan','Data Fasilitas Gagal dihapus');    
        }
    }
}
