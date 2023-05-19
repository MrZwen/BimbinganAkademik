<?php 
class Mbimbingan extends CI_Model
{
    function simpanbimbingan()
    {
        $data=$_POST;
        $this->db->insert('bimbingan',$data);
        $this->session->set_flashdata('pesan','Data sudah disimpan');
        redirect('cbimbingan/formbimbingan', 'refresh');
    }
}
?>