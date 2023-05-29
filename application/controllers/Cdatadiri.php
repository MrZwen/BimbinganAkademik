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

    public function upload() {
        $config['upload_path']   = 'gambar/'; // Lokasi penyimpanan foto (pastikan folder telah ada)
        $config['allowed_types'] = 'jpg|jpeg|png'; // Jenis file yang diizinkan
        $config['max_size']      = 2048; // Ukuran file maksimum dalam kilobita

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            // Jika gagal mengunggah foto, tampilkan pesan error
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            // Ambil nama file yang diunggah
            $file_name = $data['upload_data']['file_name'];

            // Simpan nama file ke dalam kolom database (misalnya, menggunakan model atau metode lainnya)
            $this->mdatadiri->saveFile($file_name);
        }
        
    }

    public function uploadDosen() {
        $config['upload_path']   = 'gambar/'; // Lokasi penyimpanan foto (pastikan folder telah ada)
        $config['allowed_types'] = 'jpg|jpeg|png'; // Jenis file yang diizinkan
        $config['max_size']      = 2048; // Ukuran file maksimum dalam kilobita

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            // Jika gagal mengunggah foto, tampilkan pesan error
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            // Ambil nama file yang diunggah
            $file_name = $data['upload_data']['file_name'];

            // Simpan nama file ke dalam kolom database (misalnya, menggunakan model atau metode lainnya)
            $this->mdatadiri->saveFileD($file_name);
        }
        
    }
} 
?>