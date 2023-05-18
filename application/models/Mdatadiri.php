<?php
class mdatadiri extends CI_Model
{
    function updatedatadiri()
    {
        $data = $_POST;
        $id_akun = $this->session->userdata('id_akun');
        $this->db->where('id_akun', $id_akun); 
        $this->db->update('mahasiswa', $data);
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        redirect('cutama/tampilanM', 'refresh');
    }
    function tampildatam()
	{
		$id_akun = $this->session->userdata('id_akun');
		$this->db->where('id_akun', $id_akun); // menentukan kondisi WHERE
		$query = $this->db->get('mahasiswa'); // mengambil satu data dari tabel 'users'
		return $query->row();
	}
}
