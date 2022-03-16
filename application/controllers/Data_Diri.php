<?php

class Data_Diri extends CI_Controller{
    public function index(){
    $this->load->view('data_diri');
    }
    public function simpan()
    {

      $this->M_Reservasi->simpan();
      redirect('konfirmasi');
    }
}