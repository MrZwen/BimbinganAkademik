<?php
class Cutama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('mdatadiri');
        $this->load->model('mjumlah');
    }
    public function tampilanK()
    {
        $this->mvalidasi->validasiK();
        $count = $this->mjumlah->countM();
        $datalist['hasil']=$this->mdatadiri->tampildataK();

        $data['konten'] = $this->load->view('kaprodi/dashboard',$datalist, TRUE);
        $data['count'] = $count;
        $this->load->view('kaprodi/tampilanKaprodi', $data);
    }
    public function tampilanD()
    {
        $this->mvalidasi->validasiD();
        $datalist['user']=$this->mdatadiri->tampildatad();

        $data['konten'] = $this->load->view('dosen/datadiridosen',$datalist, TRUE);
        $this->load->view('dosen/tampilanDosen', $data);
    }

    public function tampilanM()
    {
        $this->mvalidasi->validasiM();
        $datalist['user']=$this->mdatadiri->tampildatam();

        $data['konten'] = $this->load->view('mahasiswa/datadiri',$datalist, TRUE);
        $this->load->view('mahasiswa/tampilanMahasiswa', $data);
    }
    
}
