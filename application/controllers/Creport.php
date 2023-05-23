<?php 
class Creport extends CI_Controller
{
    function ReportK()
    {
        $data['konten'] = $this->load->view('Kaprodi/report', '', TRUE);
        $this->load->view('Kaprodi/tampilanKaprodi', $data);
    }
}

?>