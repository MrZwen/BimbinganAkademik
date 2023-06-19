<?php 
class Cgroup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mgroup');
    }
    function GroupBimbingan()
    {   
        $datalist['hasil'] = $this->mgroup->tampilGroup();
        $data['konten'] = $this->load->view('Kaprodi/group', $datalist, TRUE);
        $this->load->view('kaprodi/tampilanKaprodi', $data);
    }
    function tambahmahasiswa()
    {
        $this->mgroup->tambahmahasiswa(); 
        $this->tambahmahasiswa(); 
    }

    function GroupBimbinganDosen()
    {   
        $datalist['hasil'] = $this->mgroup->tampilGroupD();
        $data['konten'] = $this->load->view('Dosen/groupbimbingan', $datalist, TRUE);
        $this->load->view('dosen/tampilandosen', $data);
    }
}
?>