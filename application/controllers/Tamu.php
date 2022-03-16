<?php
  class Tamu extends CI_Controller 
	{
    public function __construct()
    {
			parent::__construct();
			$this->load->model('M_Tamu');
    }

		public function index()
		{
			if($this->session->userdata('login')!= TRUE)
			{
				redirect('login');
			}

			$data['title'] = "Data Tamu";
			$data['tamu'] = $this->M_Tamu->data_tamu();
			$this->template->load_admin('index','tamu',$data);
		}

    public function tambah()
    {
      if($this->session->userdata('login')!= TRUE)
      {
        redirect('login');
      }

      $data['title'] = "Data Tamu";
      $data['subtitle'] = "Tambah Data Tamu";
      $this->template->load_admin('index','tamu_tambah',$data);
    }

    public function simpan()
    {
      if($this->session->userdata('login')!= TRUE)
      {
        redirect('login');
      }

      $this->M_Tamu->simpan();
      redirect('suksessimpan');
    }


    public function hapus()
    {
      if($this->session->userdata('login')!= TRUE)
      {
        redirect('login');
      }

      $id = $this->uri->segment(3);
      $this->M_Tamu->hapus_data_tamu($id);
      redirect('tamu');
    }
  }
?>