<?php class Cdatadiri extends CI_Controller
 { 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdatadiri');

    }
     function updatedatadiri() 
    {
        $this->mdatadiri->updatedatadiri(); 
        $this->updatedatadiri(); 
    }  
    function updatedatadirid() 
    {
        $this->mdatadiri->updatedatadirid(); 
        $this->updatedatadirid(); 
    }  
} 
?>