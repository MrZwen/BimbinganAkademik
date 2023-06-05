<?php
class Mriwayat extends CI_Model
{
    function riwayatM()
    {
        $id_akun = $this->session->userdata('id_akun');
        $query = $this->db->get('riwayat');
        $this->db->where('mahasiswa.id_akun', $id_akun);

        if ($query->num_rows() > 0) {
            $hasil = $query->result();
        } else {
            $hasil = [];
        }

        return $hasil;
    }
}
