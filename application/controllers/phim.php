<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class phim extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('phim_model');
		$ketqua = $this->phim_model->getAllPhim();
		$ketqua = array("mangdulieu" => $ketqua);

		$this->load->view('phim_view', $ketqua);
	}


}

/* End of file phim.php */
/* Location: ./application/controllers/phim.php */