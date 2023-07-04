<?php
class Mbimbingan extends CI_Model
{
    function simpanbimbingan()
    {
        $data = $_POST;
        $this->db->insert('form_evaluasi', $data);
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        redirect('cbimbingan/formbimbingan', 'refresh');
    }

    function tampilformb()
    {
        $id_akun = $this->session->userdata('id_akun');
        $sql = $this->db->select('group_bimbingan.* , dosen.NamaDosen, mahasiswa.*, nilai.*')
            ->from('group_bimbingan')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID')
            ->join('mahasiswa', 'mahasiswa.Nim = group_bimbingan.NIM ')
            ->join('nilai', 'group_bimbingan.id_nilai = nilai.id_nilai')
            ->where('mahasiswa.id_akun', $id_akun)
            ->get('');
            if ($sql->num_rows() > 0) {
                $user = $sql->result();
            } else {
                $user = [];
            }
            return $user;
    }


    function tampilbimbingan()
    {
        $id_akun = $this->session->userdata('id_akun');
        $sql = $this->db->select('form_evaluasi.*, mahasiswa.*, nilai.*,dosen.gambar')
            ->from('group_bimbingan')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID')
            ->join('mahasiswa', 'mahasiswa.Nim = group_bimbingan.NIM')
            ->join('form_evaluasi', 'form_evaluasi.id_group = group_bimbingan.id_group')
            ->join('nilai','nilai.id_nilai = group_bimbingan.id_nilai')
            ->where('dosen.id_akun', $id_akun);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $hasil = $query->result();
        } else {
            $hasil = [];
        }
        return $hasil;
    }

    function tampilNilai($id_group)
    {
        $query = $this->db->select('form_evaluasi.*, mahasiswa.*, nilai.*,dosen.gambar')
            ->from('group_bimbingan')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID')
            ->join('mahasiswa', 'mahasiswa.Nim = group_bimbingan.NIM')
            ->join('form_evaluasi', 'form_evaluasi.id_group = group_bimbingan.id_group')
            ->join('nilai','nilai.id_nilai = group_bimbingan.id_nilai')
            ->where('group_bimbingan.id_group', $id_group);
        $query = $this->db->get();

        return $query->row();
    }
    
    function tampiltahun()
    {
        $id_akun = $this->session->userdata('id_akun');
        $sql = $this->db->select('tahunajaran,semester')
            ->from('group_bimbingan')
            ->join('mahasiswa', 'mahasiswa.Nim = group_bimbingan.NIM ')
            ->where('mahasiswa.id_akun', $id_akun)
            ->get('');
            if ($sql->num_rows() > 0) {
                $hasil = $sql->result();
            } else {
                $hasil = [];
            }
    
            return $hasil;
    }


    public function getVerifikasi()
    {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('bimbingan.VerifMahasiswa')
            ->from('group_bimbingan')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID')
            ->join('mahasiswa', 'mahasiswa.Nim = group_bimbingan.NIM')
            ->join('bimbingan', 'bimbingan.id_group = group_bimbingan.id_group')
            ->where('mahasiswa.id_akun', $id_akun);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $verifikasi = $query->row()->VerifMahasiswa;
            if ($verifikasi == 'Terverifikasi') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
