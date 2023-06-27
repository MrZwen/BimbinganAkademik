<?php 
class Cbimbingan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mbimbingan');
        $this->load->model('mdatadiri');

    }

    function formbimbingan() {
        $dataview['hasil'] = $this->mbimbingan->tampiltahun();
        $data['konten'] = $this->load->view('Mahasiswa/pilihtahun',$dataview,TRUE);
        $verifikasi = $this->mbimbingan->getVerifikasi(); 
        if ($verifikasi) {
            $data['table'] = $this->load->view('Mahasiswa/telahbimbingan', '', TRUE);
            $this->load->view('Mahasiswa/tampilanMahasiswa', $data);
        } else {
            $datalist['user'] = $this->mbimbingan->tampilformb();
            $data['table'] = $this->load->view('Mahasiswa/formBimbingan', $datalist, TRUE);
            $this->load->view('Mahasiswa/tampilanMahasiswa', $data);
        }
    }

    function simpanbimbingan() 
    {
        $this->mbimbingan->simpanbimbingan(); 
        $this->simpanbimbingan(); 
    }

    function bimbingan() {
        $datalist['user']=$this->mbimbingan->tampilbimbingan();
        $data['konten'] = $this->load->view('Dosen/bimbingan',$datalist, TRUE);
        $this->load->view('Dosen/tampilanDosen', $data);
    }

    function simpanevaluasi()
    {
        $this->load->model('mevaluasi');
        $this->mevaluasi->simpanevaluasi();
        $this->simpanevaluasi();
    }
 
}
?>