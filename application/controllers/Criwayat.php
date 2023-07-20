<?php
class Criwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mriwayat');
        $this->load->library('pdf_report');
        $this->load->model('mevaluasi');
    }
    function RiwayatK()
    {
        $role = $this->session->userdata('Role');
        
        if ($role != 'kaprodi') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }

        $datalist['hasil'] = $this->mriwayat->riwayatK();
        $data['konten'] = $this->load->view('Kaprodi/riwayat', $datalist, TRUE);
        $this->load->view('Kaprodi/tampilanKaprodi', $data);
    }

    function riwayatD()
    {
        $role = $this->session->userdata('Role');
        
        if ($role != 'dosen') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }

        $datalist['hasil'] = $this->mriwayat->riwayatD();
        $data['konten'] = $this->load->view('Dosen/riwayatDosen', $datalist, TRUE);
        $this->load->view('Dosen/tampilanDosen', $data);
    }

    function RiwayatM()
    {
        $role = $this->session->userdata('Role');
        
        if ($role != 'mahasiswa') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
        $datalist['hasil'] = $this->mriwayat->riwayatM();
        $data['konten'] = $this->load->view('Mahasiswa/riwayatMahasiswa', $datalist, TRUE);
        $this->load->view('Mahasiswa/tampilanMahasiswa', $data);
    }

    function pdf()
    {
        $this->load->view('Dosen/laporanpdf');
    }

    function pdfK($id_evaluasi)
    {
        $role = $this->session->userdata('Role');
        
        if ($role != 'kaprodi') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        } 
        $this->mevaluasi->evaluasi($id_evaluasi);
        $datalist['User'] = $this->mevaluasi->evaluasi($id_evaluasi);
        $this->load->view('Dosen/laporanpdf', $datalist);
    }

    function laporan($id_evaluasi)
    {
        $role = $this->session->userdata('Role');
        
        if ($role != 'dosen') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }

        $this->mevaluasi->evaluasi($id_evaluasi);
        $datalist['User'] = $this->mevaluasi->evaluasi($id_evaluasi);
        $this->load->view('Dosen/laporanpdf', $datalist);
    }
    function evaluasi($id_evaluasi)
    {
        $role = $this->session->userdata('Role');
        
        if ($role != 'mahasiswa') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
        
        $this->mevaluasi->evaluasi($id_evaluasi);
        $datalist['User'] = $this->mevaluasi->evaluasi($id_evaluasi);
        $this->load->view('Mahasiswa/hasilevaluasi', $datalist);
    }
}
