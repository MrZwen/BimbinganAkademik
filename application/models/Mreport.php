<?php
class Mreport extends CI_Model
{
    function tampilreport()
    {
        $query = $this->db->select('*')
            ->from('mahasiswa')
            ->join('group_bimbingan', 'mahasiswa.Nim = group_bimbingan.NIM', 'left')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID', 'left')
            ->join('form_evaluasi', 'group_bimbingan.id_group = form_evaluasi.id_group', 'left')
            ->order_by('mahasiswa.Nama', 'ASC')
            ->order_by('group_bimbingan.tahunajaran', 'ASC')
            ->order_by('form_evaluasi.TglBimbingan', 'ASC')
            ->get();

        if ($query->num_rows() > 0) {
            $hasil = $query->result();
        } else {
            $hasil = [];
        }
        return $hasil;
    }

    function tampilreportD()
    {
        $id_akun = $this->session->userdata('id_akun');
        $query = $this->db->select('*')
            ->from('mahasiswa')
            ->join('group_bimbingan', 'mahasiswa.Nim = group_bimbingan.NIM', 'left')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID', 'left')
            ->join('form_evaluasi', 'group_bimbingan.id_group = form_evaluasi.id_group', 'left')
            ->where('dosen.id_akun', $id_akun)
            ->order_by('mahasiswa.Nama', 'ASC')
            ->order_by('form_evaluasi.TglBimbingan', 'ASC')
            ->order_by('group_bimbingan.tahunajaran', 'ASC')
            ->get();

        if ($query->num_rows() > 0) {
            $hasil = $query->result();
        } else {
            $hasil = array();
        }

        return $hasil;
    }
}
