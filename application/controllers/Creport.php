<?php 
class Creport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mreport');
    }
    function ReportK()
    {
        $role = $this->session->userdata('Role');
        
        if ($role != 'kaprodi') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
        
        $datalist['hasil'] = $this->mreport->tampilreport();
        $data['konten'] = $this->load->view('Kaprodi/report', $datalist, TRUE);
        $this->load->view('Kaprodi/tampilanKaprodi', $data);
    }

    function ReportD(){
        $role = $this->session->userdata('Role');
        
        if ($role != 'dosen') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
        $datalist['hasil'] = $this->mreport->tampilreportD();
        $data['konten'] = $this->load->view('Dosen/report', $datalist, TRUE);
        $this->load->view('Dosen/tampilanDosen', $data);
    }
}

?>