<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('login_model');
		if ($this->session->userdata('level') != "user") {
			redirect('login', 'refresh');
		}
	}

	public function index()
	{
		$this->load->view('mahasiswa/user');
	}

}

/* End of file User.php */

?>
