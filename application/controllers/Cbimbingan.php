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
            $datalist['user'] = $this->mbimbingan->tampilformb();
            $data['konten'] = $this->load->view('Mahasiswa/formBimbingan', $datalist, TRUE);
            $this->load->view('Mahasiswa/tampilanMahasiswa', $data);
    }

    function simpanbimbingan() 
    {
        $this->mbimbingan->simpanbimbingan(); 
    }

    function bimbingan() {
        $datalist['user']=$this->mbimbingan->tampilbimbingan();
        $data['konten'] = $this->load->view('Dosen/bimbingan',$datalist, TRUE);
        $this->load->view('Dosen/tampilanDosen', $data);
    }

    function detailNilai($id_evaluasi) {
        $datalist['user'] = $this->mbimbingan->tampilNilai($id_evaluasi);
        $data['konten'] = $this->load->view('Dosen/detailNilai', $datalist, TRUE);
        $this->load->view('Dosen/tampilanDosen', $data);
    }

    function simpanevaluasi($id_evaluasi)
    {
        $this->load->model('mevaluasi');
        $this->mevaluasi->simpanevaluasi($id_evaluasi);
    }
 
}
?>