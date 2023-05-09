<?php 
class Mlogin extends CI_Model
{
    function proseslogin ()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $sql="select * from akun where nim='".$username."'and password='".$password."'";
        $query=$this->db->query($sql);
        if ($query->num_rows()>0)
        { 
            $data=$query->row();
				$Role=$data->Role;
				$array=array(
					'Role'=>$Role
				);
             $this->session->set_userdata($array);
            redirect('cutama/tampilanK','refresh'); 
        }
        else{
            $this->session->set_flashdata('pesan', 'Login Gagal');
            redirect('Clogin/formlogin','refresh');
        }
    }
}
?>