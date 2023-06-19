<?php
class Cutama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('mdatadiri');
        $this->load->model('mjumlah');
        $this->load->model('Mlogin'); // Memuat model
    }

    function tampilan()
    {
        $role = $this->session->userdata('Role');
        if ($role == 'kaprodi') {
            redirect('cutama/tampilanK', '');;
        } elseif ($role == 'dosen') {
            redirect('cutama/tampilanD', '');;
        } elseif ($role == 'mahasiswa') {
            redirect('cutama/tampilanM', '');;
        } else {
            // Role tidak valid
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
    }

    public function tampilanK()
    {
        $this->mvalidasi->validasiK();
        $countM = $this->mjumlah->countM();
        $countD = $this->mjumlah->countD();
        $countG = $this->mjumlah->countG();
        $countSK = $this->mjumlah->countSK();
        $datalist['hasil'] = $this->mdatadiri->tampildataK();

        $data['konten'] = $this->load->view('kaprodi/dashboard', $datalist, TRUE);
        $data['countM'] = $countM;
        $data['countD'] = $countD;
        $data['countG'] = $countG;
        $data['countSK'] = $countSK;
        $this->load->view('kaprodi/tampilanKaprodi', $data);
    }

    public function tampilanD()
    {
        $this->mvalidasi->validasiD();
        $datalist['user'] = $this->mdatadiri->tampildatad();

        $data['konten'] = $this->load->view('dosen/datadiridosen', $datalist, TRUE);
        $this->load->view('dosen/tampilanDosen', $data);
    }

    public function tampilanM()
    {
        $this->mvalidasi->validasiM();
        $datalist['user'] = $this->mdatadiri->tampildatam();

        $data['konten'] = $this->load->view('mahasiswa/datadiri', $datalist, TRUE);
        $this->load->view('mahasiswa/tampilanMahasiswa', $data);
    }
}
