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
    }
?>