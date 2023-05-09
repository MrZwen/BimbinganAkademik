<?php
	class Mvalidasi extends CI_Model
	{
		function validasiK()
		{
			
			if ($this->session->userdata('Role')=='kaprodi') {
				
			}
			else {
				redirect('cutama/tampilanD','refresh');
			}
		}
		function validasiD()
		{
			
			if ($this->session->userdata('Role')=='dosen') {
				
			}
			else {
				redirect('cutama/tampilanM','refresh');
			}
		}
		function validasiM() {
			if ($this->session->userdata('Role')=='mahasiswa') {
				
			}
			else {
			echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
				redirect('clogin/formlogin','refresh');
			}
		}

		
	}
?>