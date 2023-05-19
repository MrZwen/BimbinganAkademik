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
        $this->load->model('mdatadiri');
        $datalist['user']=$this->mdatadiri->tampildatad();

        $data['konten'] = $this->load->view('dosen/datadiridosen',$datalist, TRUE);
        $this->load->view('dosen/tampilanDosen', $data);
    }

    function tampilanM()
    {
        $this->mvalidasi->validasiM();
        $this->load->model('mdatadiri');
        $datalist['user']=$this->mdatadiri->tampildatam();

        $data['konten'] = $this->load->view('mahasiswa/datadiri',$datalist, TRUE);
        $this->load->view('mahasiswa/tampilanMahasiswa', $data);
    }
    
}
