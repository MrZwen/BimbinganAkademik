<?php
class Cskbimbingan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mskbimbingan');
    }

    function TampilSK()
    {
        $data['konten'] = $this->load->view('Kaprodi/skbimbingan', '', TRUE);
        $datalist['hasil'] = $this->Mskbimbingan->tampilskbimbingan();
        $data['table'] = $this->load->view('Kaprodi/tampilsk', $datalist, TRUE);
        $this->load->view('Kaprodi/tampilanKaprodi', $data);
    }

    function simpanskbimbingan()
    {
        $config['upload_path']   = 'document/'; // Lokasi penyimpanan foto (pastikan folder telah ada)
        $config['allowed_types'] = 'pdf|docx'; // Jenis file yang diizinkan
        $config['max_size']      = 5000; // Ukuran file maksimum dalam kilobita

        $this->load->library('upload', $config);

        if (@!$this->upload->do_upload('FileSk')) {
            echo "<script> alert ('file yang anda unggah tidak valid');</script>";
            redirect('cskbimbingan/TampilSK', 'refresh');
        } else {
            $data = array('upload_data' => $this->upload->data());

            // Ambil nama file yang diunggah
            $file_name = $data['upload_data']['file_name'];

            // Simpan nama file ke dalam kolom database (misalnya, menggunakan model atau metode lainnya)
            $this->Mskbimbingan->simpanskbimbingan($file_name);
            $this->simpanskbimbingan();
        }
    }

    function hapusdata($Id_Sk)
    {
        $this->Mskbimbingan->hapusdata($Id_Sk);
        redirect('Kaprodi/tampilanKaprodi');
    }

    function editdata($Id_Sk)
    {
        $this->Mskbimbingan->editskbimbingan($Id_Sk);
    }

    function informasiskdosen()
    {
        $datalist['hasil'] = $this->Mskbimbingan->tampilskbimbingan();
        $data['konten'] = $this->load->view('Dosen/informasisk', $datalist, TRUE);
        $this->load->view('Dosen/tampilanDosen', $data);
    }

    function informasiskm()
    {
        $datalist['hasil'] = $this->Mskbimbingan->tampilskbimbingan();
        $data['konten'] = $this->load->view('Mahasiswa/informasiskm', $datalist, TRUE);
        $this->load->view('Mahasiswa/tampilanMahasiswa', $data);
    }
}
