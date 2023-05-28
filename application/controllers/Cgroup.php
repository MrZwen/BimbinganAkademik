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
}
?>