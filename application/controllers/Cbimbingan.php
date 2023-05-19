<?php 
class Cbimbingan extends CI_Controller 
{
    function formbimbingan () {
        $data['konten']=$this->load->view('Mahasiswa/formBimbingan','',TRUE);
        $this->load->view('Mahasiswa/tampilanMahasiswa',$data);
    }

    function simpanbimbingan() 
    {
        $this->load->model('mbimbingan');
        $this->mbimbingan->simpanbimbingan(); 
        $this->simpanbimbingan(); 
    }
}
?>