<?php
class Mriwayat extends CI_Model
{
    function riwayatM()
    {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->where('id_akun', $id_akun);
        $query = $this->db->get('riwayat');
        

        if ($query->num_rows() > 0) {
            $hasil = $query->result();
        } else {
            $hasil = [];
        }

        return $hasil;
    }
}
