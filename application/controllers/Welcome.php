<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function construct()
    {
        parent::construct();
        $this->load->model("M_TipeKamar");
        $this->load->model("M_Fasilitashotel");
    }
	public function index()
	{
		$data = array(
		'data_kamar_tipe'=>$this->load->model("M_Kamar_Tipe"),
		'data_fasilitas'=>$this->load->model("M_Fasilitas"),
	);
	$this->load->view('index3', $data);
}
}
