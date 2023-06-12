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
    function updatedatadirid()
    {
        $data = $_POST;
        $id_akun = $this->session->userdata('id_akun');
        $this->db->where('id_akun', $id_akun); 
        $this->db->update('dosen', $data);
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        redirect('cutama/tampilanD', 'refresh');
    }

    function tampildatam()
	{
		$id_akun = $this->session->userdata('id_akun');
		$this->db->where('id_akun', $id_akun); // menentukan kondisi WHERE
		$query = $this->db->get('mahasiswa'); // mengambil satu data dari tabel 'mahasiswa'
		return $query->row();
	}

    function tampildatad()
    {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->where('id_akun', $id_akun); // menentukan kondisi WHERE
        $query = $this->db->get('dosen'); // mengambil satu data dari tabel 'dosen'
        return $query->row();
    }

    function tampildataK()
    {
        $query = $this->db->get('mahasiswa');
        if($query->num_rows() > 0){
            $hasil = $query->result();
        }else{
            $hasil = [];
        }
        return $hasil;
    }

    public function saveFile($file_data) {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->where('id_akun', $id_akun);
        $data = array(
            'gambar' => $file_data
        );

        $this->db->update('mahasiswa', $data); 
        redirect('cutama/tampilanM', 'refresh');
    }

    public function saveFileD($file_data) {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->where('id_akun', $id_akun);
        $data = array(
            'gambar' => $file_data
        );

        $this->db->update('dosen', $data); 
        redirect('cutama/tampilanD', 'refresh');
    }

    function hapusfotoM() {
        $id_akun = $this->session->userdata('id_akun');
        $data = array('gambar' => NULL); 
        $this->db->update('mahasiswa', $data);
        $this->db->where('id_akun', $id_akun);
        $this->session->set_flashdata('pesan', 'Foto Anda telah dihapus');
        redirect('cutama/tampilanM', 'refresh');
    }
    

}

?>
