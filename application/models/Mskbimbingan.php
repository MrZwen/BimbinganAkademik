<?php
class mskbimbingan extends CI_Model
{
    public function simpanskbimbingan($file_data)
    {
        $data = $this->input->post(); // Menggunakan $this->input->post() untuk mendapatkan data dari form

        // Insert data ke tabel 'skpembimbing'
        $this->db->insert('skpembimbing', $data);

        // Mendapatkan ID terakhir yang diinsert
        $last_id = $this->db->insert_id();

        // Update kolom 'File_Sk' dengan $file_data
        $data = array(
            'File_Sk' => $file_data
        );

        $this->db->where('id_Sk', $last_id);
        $this->db->update('skpembimbing', $data);

        redirect('cskbimbingan/TampilSK', 'refresh');
    }

    function editskbimbingan($Id_Sk)
    {
        $this->db->where('Id_Sk', $Id_Sk);
        $query = $this->db->get('skpembimbing');

        if ($query->num_rows() > 0) {

            $data = $query->row();
            echo "<script>$('#semester').val('" . $data->Semester . "');</script>";
            echo "<script>$('#tahunajaran').val('" . $data->tahunajaran . "');</script>";

        }
    }


    function tampilskbimbingan()
    {
        $query = $this->db->get('skpembimbing');

        if ($query->num_rows() > 0) {
            foreach($query->result() as $data)
				{
					$hasil[]=$data;	
				}
        } else {
            $hasil = '';
        }

        return $hasil;
    }
}
