<?php
class Mbimbingan extends CI_Model
{
    function simpanbimbingan()
    {
        $data = $_POST;
        $this->db->insert('bimbingan', $data);
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        redirect('cbimbingan/formbimbingan', 'refresh');
    }

    function tampilformb()
    {
        $id_akun = $this->session->userdata('id_akun');
        $sql = $this->db->select('group_bimbingan.* , dosen.NamaDosen, mahasiswa.*')
            ->from('group_bimbingan')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID')
            ->join('mahasiswa', 'mahasiswa.Nim = group_bimbingan.NIM ')
            ->where('mahasiswa.id_akun', $id_akun)
            ->get('');
        return $sql->row();
    }


    function tampilbimbingan()
    {
        $id_akun = $this->session->userdata('id_akun');
        $sql = $this->db->select('bimbingan.*, mahasiswa.*, dosen.gambar')
            ->from('group_bimbingan')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID')
            ->join('mahasiswa', 'mahasiswa.Nim = group_bimbingan.NIM')
            ->join('bimbingan', 'bimbingan.id_group = group_bimbingan.id_group')
            ->where('dosen.id_akun', $id_akun);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $hasil = $query->result();
        } else {
            $hasil = [];
        }
        return $hasil;
        return $sql->row();
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
