<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = "Home";
        $mhs_arr = array("Andi Bagus", "Dewi Ayu", "Dika Supatra", "Agung Pamudji");
        $data['nama'] = $mhs_arr;
        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
    }

    public function belajar()
    {
        $this->load->view('template/header');
        $this->load->view('home/belajar');
        $this->load->view('template/footer');
    }

    public function belajar_kedua()
    {
        $this->load->view('template/header');
        $this->load->view('home/belajar_kedua');
        $this->load->view('template/footer');
    }

}

/* End of file Home.php */

?>