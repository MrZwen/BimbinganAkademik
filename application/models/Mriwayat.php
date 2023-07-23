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

    function riwayatD()
    {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->where('id_akund', $id_akun);
        $query = $this->db->where('VerifDosen','Terverifikasi')
        ->where('id_akund', $id_akun)
        ->order_by('TglBimbingan', 'DESC')
        ->get('riwayat');

        if ($query->num_rows() > 0) {
            $hasil = $query->result();
        } else {
            $hasil = [];
        }

        return $hasil;
    }

    public function riwayatK()
    {
        $query = $this->db->where('VerifDosen','Terverifikasi')
        ->order_by('TglBimbingan', 'DESC')
        ->get('riwayat');

        if ($query->num_rows() > 0) {
            $hasil = $query->result();
        } else {
            $hasil = [];
        }

        return $hasil;
    }
}
