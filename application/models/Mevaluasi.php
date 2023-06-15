<?php
class Mevaluasi extends CI_Model
{
    public function simpanevaluasi()
    {
        $data = $_POST;
        $this->db->insert('form_evaluasi', $data);
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        redirect('cbimbingan/bimbingan', 'refresh');
    }
}
