<?php 
class mjumlah extends CI_Model{
    public function countM(){
        return $this->db->count_all('mahasiswa');
    }
}
?>