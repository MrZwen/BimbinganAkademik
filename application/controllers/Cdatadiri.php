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
        $role = $this->session->userdata('Role');
        
        if ($role != 'dosen') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }

        $this->mdatadiri->updatedatadirid(); 
        $this->updatedatadirid(); 
    }  

    public function upload() {
        $config['upload_path']   = 'gambar/'; // Lokasi penyimpanan foto (pastikan folder telah ada)
        $config['allowed_types'] = 'jpg|jpeg|png'; // Jenis file yang diizinkan
        $config['max_size']      = 2048; // Ukuran file maksimum dalam kilobita
        $config['overwrite']     = true;

        $this->load->library('upload', $config);

        if (@!$this->upload->do_upload('photo')) {
            echo "<script> alert ('foto yang anda unggah tidak valid');</script>";
            redirect('cutama/tampilan', 'refresh');
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
        $config['overwrite']     = true;

        $this->load->library('upload', $config);

        if (@!$this->upload->do_upload('photo')) {
            // Jika gagal mengunggah foto, tampilkan pesan error
            echo "<script>alert ('foto yang anda unggah tidak valid');</script>";
            redirect('cutama/tampilan', 'refresh');
        } else {
            $data = array('upload_data' => $this->upload->data());

            // Ambil nama file yang diunggah
            $file_name = $data['upload_data']['file_name'];

            // Simpan nama file ke dalam kolom database (misalnya, menggunakan model atau metode lainnya)
            $this->mdatadiri->saveFileD($file_name);
        }
        
    }

    function hapusfotoM() {
        $this->mdatadiri->hapusfotoM(); 
        $this->hapusfotoM(); 
    } 
} 
?>