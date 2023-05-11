<?php 
class Mlogin extends CI_Model
{
    function proseslogin ()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $sql="select * from akun INNER JOIN mahasiswa ON akun.id_akun = mahasiswa.id_akun where username='".$username."'and password='".$password."'";
        $query=$this->db->query($sql);
        if ($query->num_rows()>0)
        { 
            $data=$query->row();
                $Nama=$data->Nama; //Harusnya Username cuma belum ada
				$Role=$data->Role;
				$array=array(
                    'Nama'=>$Nama,
					'Role'=>$Role
				);
             $this->session->set_userdata($array);
            //  var_dump($this->session->all_userdata());
            redirect('cutama/tampilanK','refresh'); 
        }
        else{
            $this->session->set_flashdata('pesan', 'Login Gagal');
            redirect('Clogin/formlogin','refresh');
        }
    }
}
?>