<?php
class Mvalidasi extends CI_Model
{
	function validasiK()
	{

		if ($this->session->userdata('Role') == 'kaprodi') {
			$id_akun = $this->session->userdata('id_akun');
			$sql = $this->db->select('*')
				->from('akun')
				->join('kaprodi', 'akun.id_akun = kaprodi.id_akun')
				->where('kaprodi.id_akun', $id_akun)
				->get(); // melakukan inner join agar nama Kaprodi yang login tampil pada dashboard
			$data = $sql->row();
			$Nama = $data->Nama;
			$array = array(
				'Nama' => $Nama,
			);
			$this->session->set_userdata($array);
		} else {
			redirect('cutama/tampilanD', 'refresh');
		}
	}
	function validasiM()
	{
		if ($this->session->userdata('Role') == 'mahasiswa') {
			$id_akun = $this->session->userdata('id_akun');
			$sql = $this->db->select('*')
				->from('akun')
				->join('mahasiswa', 'akun.id_akun = mahasiswa.id_akun')
				->where('mahasiswa.id_akun', $id_akun)
				->get();
			$data = $sql->row();
			$Nama = $data->Nama;
			$gambar = $data->gambar;
			$array = array(
				'Nama' => $Nama,
				'gambar'=>$gambar,
			);
			$this->session->set_userdata($array);
		} else {
			echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
			redirect('clogin/formlogin', 'refresh');
		}
	}
	function validasiD()
	{
		if ($this->session->userdata('Role') == 'dosen') {
			$id_akun = $this->session->userdata('id_akun');
			$sql = $this->db->select('*')
				->from('akun')
				->join('dosen', 'akun.id_akun = dosen.id_akun')
				->where('dosen.id_akun', $id_akun)
				->get();
			$data = $sql->row();
			$NamaDosen = $data->NamaDosen;
			$gambar = $data->gambar;
			$array = array(
				'NamaDosen' => $NamaDosen,
				'gambar'=>$gambar,
			);
			$this->session->set_userdata($array);
		} else {
			redirect('cutama/tampilanM', 'refresh');
		}
	}
	
	
}
