<?php 
class Cbimbingan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mbimbingan');

    }
    function formbimbingan () {
        $this->load->model('mdatadiri');
        $datalist['user']=$this->mbimbingan->tampilformb(); 
        $data['konten']=$this->load->view('Mahasiswa/formBimbingan',$datalist,TRUE);
        $this->load->view('Mahasiswa/tampilanMahasiswa',$data);
    }

    function simpanbimbingan() 
    {
        $this->mbimbingan->simpanbimbingan(); 
        $this->simpanbimbingan(); 
    }
}
?>