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
        $datalist['hasil'] = $this->mreport->tampilreport();
        $data['konten'] = $this->load->view('Kaprodi/report', $datalist, TRUE);
        $this->load->view('Kaprodi/tampilanKaprodi', $data);
    }
}

?>