<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model {
    public function getAll(){
        return $this->db->get('siswa')->result_array();
    }

    public function tambah(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat', true),
            "nim" => $this->input->post('nim',true)
        ];
        $this->db->insert('siswa', $data);  
    }
}

/* End of file siswa_model.php */

?>