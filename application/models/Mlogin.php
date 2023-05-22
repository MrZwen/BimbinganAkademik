<?php 
class Mlogin extends CI_Model
{
    function proseslogin ()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $sql = $this->db->select('*')
            ->from('akun')
            ->where('username', $username)
            ->where('password', $password)
            ->get();

        if ($sql->num_rows() > 0) {
            $data = $sql->row();
            $id_akun = $data->id_akun;
            $Role = $data->Role;
            $array = array(
                'id_akun' => $id_akun,
                'Role' => $Role
            );
            $this->session->set_userdata($array);
            redirect('cutama/tampilanK', 'refresh');
        }
        else{
            $this->session->set_flashdata('pesan', 'Login Gagal');
            redirect('Clogin/formlogin','refresh');
        }
    }
}
?>