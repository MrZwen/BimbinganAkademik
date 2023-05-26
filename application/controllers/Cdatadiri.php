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

    function upload()
    {
        $data['gambar']='';
        $gambar = $_FILES['gambar']['name']
    
        $config['upload_path'] = './gambar';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';

        $this->load->library('upload',$config);

        if(!$this->upload->do_upload(gambar))
        {
            echo 'Gambar unkown';
        } else {
            $gambar = $this->upload->data('file_name');
            $data['gambar'] = $gambar;
        }
        $this->mdatadiri->upload();
    }
    

} 
?>