<?php
class Cutama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');

    }
    function tampilanK()
    {
        $this->mvalidasi->validasiK();
        $this->load->view('tampilanKaprodi');
    }
    function tampilanD()
    {
        $this->mvalidasi->validasiD();
        $this->load->view('tampilanDosen');
    }

    function tampilanM()
    {
        $this->mvalidasi->validasiM();
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/tampilanMahasiswa');
        $this->load->view('mahasiswa/footer');
    }
    
}
