<?php
class Mevaluasi extends CI_Model
{
    public function simpanevaluasi($id_evaluasi)
    {
        $data = $_POST;
        $this->db->where('id_evaluasi',$id_evaluasi);
        $this->db->update('form_evaluasi', $data);
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        redirect('cbimbingan/bimbingan', 'refresh');
    }

    public function evaluasi($id_evaluasi) {
        $query = $this->db->select('group_bimbingan.* , dosen.*, mahasiswa.*, form_evaluasi.*, nilai.*')
            ->from('group_bimbingan')
            ->join('dosen', 'dosen.NID = group_bimbingan.NID')
            ->join('mahasiswa', 'mahasiswa.Nim = group_bimbingan.NIM')
            ->join('nilai', 'nilai.id_nilai = group_bimbingan.id_nilai')
            ->join('form_evaluasi', 'form_evaluasi.id_group = group_bimbingan.id_group')
            ->where('form_evaluasi.id_evaluasi', $id_evaluasi)
            ->get();
            return $query->row();
    }
}
