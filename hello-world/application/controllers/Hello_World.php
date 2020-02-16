<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_World extends CI_Controller {
	public function index()
	{
		$data_arr['hello'] = "Hello World";
		$this->load->view('hello_world', $data_arr);
	}

	public function pulang()
	{
		$this->load->view('bukan_hello');
	}
}
