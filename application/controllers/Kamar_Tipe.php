<?php
class Kamar_Tipe extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Kamar_Tipe');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Kamar_Tipe ";
        $data['kamar_tipe'] = $this->M_Kamar_Tipe->data_kamar_tipe();
        $this->template->load_admin('index','kamar_tipe',$data);
    }
    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }
        $data['title'] = "Data Kamar_Tipe";
        $data['subtitle'] = "Tambah Data Kamar_Tipe";
        $this->template->load_admin('index','kamar_tipe_tambah',$data);
    }
	public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }
    
        $this->M_Kamar_Tipe->simpan();		
      redirect('kamar_tipe');
    }
    public function ubah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }
    
        $data['title'] = "Data Kamar_Tipe";
        $data['subtitle'] = "Edit Data Kamar_Tipe";
    
        $id = $this->uri->segment(3);
        $data['kamar_tipe'] = $this->M_Kamar_Tipe->data_kamar_tipe_by_id($id);
        $this->template->load_admin('index','kamar_tipe_ubah',$data);
    }
        
    public function update(){
        if ($this->session->userdata('login') != true) {
            redirect('login');
        }
    
        $this->M_Kamar_Tipe->update();
        redirect('kamar_tipe');
	}
    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }
        $id = $this->uri->segment(3);
        $this->M_Kamar_Tipe->hapus_data_kamar_tipe($id);
        redirect('kamar_tipe');
      }  
}
