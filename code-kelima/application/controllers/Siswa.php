<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('siswa_model');
    }

    public function index()
    {
        $data['title'] = "List Siswa";
        $data['siswa'] = $this->siswa_model->getAll();
        $this->load->view('template/header');
        $this->load->view('siswa/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title'] = "Form menambah Data Siswa";
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('siswa/tambah', $data);
            $this->load->view('template/footer');    
        }
        else
        {
            $this->siswa_model->tambah();
            redirect('siswa','refresh');
        }
    }
}

/* End of file Siswa.php */

?>