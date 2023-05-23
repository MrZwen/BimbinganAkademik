<?php  
class Mgroup extends CI_Model{
    public function tampilGroup()
    {
        $query = $this->db->get('group_bimbingan');
        if($query->num_rows() > 0){
            $hasil = $query->result();
        }else{
            $hasil = [];
        }
        return $hasil;
    }
}
?>