<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    // constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model'); // Load Database
    }

    public function index()
    {
        $data['title'] = "List Mahasiswa";
        $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Form Menambahkan Data Mahasiswa";

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        

        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->mahasiswa_model->tambahdatamhs();
            echo "Data berhasil ditambah";
            redirect('mahasiswa','refresh');
        }
    }

}

/* End of file Mahasiswa.php */

?>