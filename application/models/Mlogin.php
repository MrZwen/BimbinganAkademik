<?php 
class Mlogin extends CI_Model
{
    function proseslogin ()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $sql="select * from akun where username='".$username."'and password='".$password."'"; //vlidasi login username dan password
        $query=$this->db->query($sql);
        if ($query->num_rows()>0)
        { 
            $data=$query->row();
                $id_akun=$data->id_akun; //ku ubah jadi id akun biar dan ku pindah session username nya di mvalidasi
				$Role=$data->Role;
				$array=array(
                    'id_akun'=>$id_akun,
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