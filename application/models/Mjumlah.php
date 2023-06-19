<?php 
class mjumlah extends CI_Model{
    public function countM(){
        return $this->db->count_all('mahasiswa');
    }
    
    public function countD(){
        return $this->db->count_all('dosen');
    }

    public function countG(){
        return $this->db->count_all('dosen');
    }

    public function countSK(){
        return $this->db->count_all('skpembimbing');
    }
}
?>