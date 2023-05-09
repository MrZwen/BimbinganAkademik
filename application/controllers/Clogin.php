<?php
class Clogin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin');

    }
    function formlogin () {
        $this->load->view('login');
    }
    function proseslogin()
    {
      
        $this->Mlogin->proseslogin();
    }
}
?>