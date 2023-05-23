<?php  
class Mgroup extends CI_Model{
    public function tampilGroup()
    {
        $query = $this->db->select('*')
				->from('group_bimbingan')
				->join('dosen', 'dosen.nid = group_bimbingan.nid')
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