<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        // echo "Selamat Datang di Halaman Home";
        $data['title'] = "Halaman Home";
        $data['nama'] = ["Andi Bagus", "Dewi Ayu", "Dika Supatra", "Agung Pamudji"];
        $this->load->view('template/header', $data);
        $this->load->view('Home/index',$data);
        $this->load->view('template/footer');
    }

    public function belajar(){
        $data['title'] = "Function Belajar";
        $this->load->view('template/header', $data);
        echo "<h1>Saya belajar CodeIgniter</h1>";
        $this->load->view('template/footer');
    }

    public function belajar_kedua(){
        $data['title'] = "Function Belajar";
        $this->load->view('template/header', $data);
        echo "<h1>Saya belajar pemrograman framework</h1>";
        $this->load->view('template/footer');
    }
}

/* End of file Home.php */


?>