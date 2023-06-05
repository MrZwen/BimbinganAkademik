<?php 
class Criwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mriwayat');

    }
    function RiwayatK()
    {
        $data['konten'] = $this->load->view('Kaprodi/riwayat', '', TRUE);
        $this->load->view('Kaprodi/tampilanKaprodi', $data);
    }

    function riwayatD() {
        $data['konten'] = $this->load->view('Dosen/riwayat','', TRUE);
        $this->load->view('Dosen/tampilanDosen', $data);
    }

    function RiwayatM()
    {
        $datalist['hasil']=$this->mriwayat->riwayatM(); 
        $data['konten'] = $this->load->view('Mahasiswa/riwayatMahasiswa', $datalist , TRUE);
        $this->load->view('Mahasiswa/tampilanMahasiswa', $data);
    }

}
?>