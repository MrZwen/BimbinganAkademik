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
        $role = $this->session->userdata('Role');
        
        if ($role != 'kaprodi') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
        
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
        $role = $this->session->userdata('Role');
        
        if ($role != 'dosen') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }

        $datalist['hasil'] = $this->mgroup->tampilGroupD();
        $data['konten'] = $this->load->view('Dosen/groupbimbingan', $datalist, TRUE);
        $this->load->view('dosen/tampilandosen', $data);
    }
}
?>