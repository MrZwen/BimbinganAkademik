<?php 
    class Mreport extends CI_Model{
        function tampilreport()
        {
            $query = $this->db->select('*')
            ->from('form_evaluasi')
            ->join('group_bimbingan', 'form_evaluasi.id_group = group_bimbingan.id_group')
            ->join('mahasiswa', 'mahasiswa.nim = group_bimbingan.nim')
            ->get();
            if($query->num_rows() > 0){
                $hasil = $query->result();
            }else{
                $hasil = [];
            }
            return $hasil;
        }

        function tampilreportD()
        {
            $id_akun = $this->session->userdata('id_akun');
    
            $query = $this->db->select('*')
                ->from('group_bimbingan')
                ->join('form_evaluasi', 'group_bimbingan.id_group = form_evaluasi.id_group')
                ->join('dosen', 'dosen.NID = group_bimbingan.NID')
                ->join('mahasiswa', 'mahasiswa.nim = group_bimbingan.nim')
                ->get();
            
            if ($query->num_rows() > 0) {
                $hasil = $query->result();
            } else {
                $hasil = array();
            }
            
            return $hasil;
        }
    }
?>