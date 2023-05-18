<?php
class Mvalidasi extends CI_Model
{
	function validasiK()
	{

		if ($this->session->userdata('Role') == 'kaprodi') {
		} else {
			redirect('cutama/tampilanD', 'refresh');
		}
	}
	function validasiD()
	{

		if ($this->session->userdata('Role') == 'dosen') {
		} else {
			redirect('cutama/tampilanM', 'refresh');
		}
	}
	function validasiM()
	{
		if ($this->session->userdata('Role') == 'mahasiswa') {
			$id_akun = $this->session->userdata('id_akun');
			$sql = "select * from akun INNER JOIN mahasiswa ON akun.id_akun = mahasiswa.id_akun where mahasiswa.id_akun='" . $id_akun . "'"; // melakukan inner join agar nama mahasiswa yang tampil pada dashboard
			$query = $this->db->query($sql);
			$data = $query->row();
			$Nama = $data->Nama;
			$array = array(
				'Nama' => $Nama,
			);
			$this->session->set_userdata($array);
		} else {
			echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
			redirect('clogin/formlogin', 'refresh');
		}
	}
	
}
