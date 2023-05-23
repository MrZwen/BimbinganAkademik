<?php 
class Cskbimbingan extends CI_Controller
{
    function TampilSK()
    {
        $data['konten'] = $this->load->view('Kaprodi/skbimbingan', '', TRUE);
        $this->load->view('Kaprodi/tampilanKaprodi', $data);
    }
}

?>