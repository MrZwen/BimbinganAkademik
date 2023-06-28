<?php
class Mevaluasi extends CI_Model
{
    public function simpanevaluasi($id_group)
    {
        $id_group = 
        $data = $_POST;
        $this->db->update('form_evaluasi', $data);
        $this->db->where ('id_group',$id_group);
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        redirect('cbimbingan/bimbingan', 'refresh');
    }

    public function evaluasi($id_evaluasi) {
        $sql = $this->db->select('group_bimbingan.* , dosen.*, mahasiswa.*, form_evaluasi.*, bimbingan.*')
            ->from('group_bimbingan')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID')
            ->join('mahasiswa', 'mahasiswa.Nim = group_bimbingan.NIM')
            ->join('bimbingan', 'bimbingan.id_group = group_bimbingan.id_group')
            ->join('form_evaluasi', 'form_evaluasi.idBimbingan = bimbingan.id_bimbingan')
            ->where('form_evaluasi.id_evaluasi', $id_evaluasi)
            ->get();
        return $sql->row_array();
    }
}
