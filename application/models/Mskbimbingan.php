<?php
class mskbimbingan extends CI_Model
{
    public function simpanskbimbingan($file_data)
    {
        $data = array(
            'Id_Sk' => $this->input->post('Id_Sk'),
            'semester' => $this->input->post('semester'),
            'tahunajaran' => $this->input->post('tahunajaran'),
            'KodeKaprodi' => $this->input->post('KodeKaprodi')
        );
        $Id_Sk = $data["Id_Sk"];


        if ($Id_Sk == "") {
            // Insert data ke tabel 'skpembimbing'
            $this->db->insert('skpembimbing', $data);
            // Mendapatkan ID terakhir yang diinsert
            $last_id = $this->db->insert_id();
            $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        } else {
            $this->db->where('id_Sk', $Id_Sk);
            $this->db->update('skpembimbing', $data);
            $last_id = $Id_Sk;
            $this->session->set_flashdata('pesan', 'Data sudah diedit');
        }

        // Update kolom 'File_Sk' dengan $file_data
        $this->db->set('File_Sk', $file_data);
        $this->db->where('id_Sk', $last_id);
        $this->db->update('skpembimbing');

        redirect('cskbimbingan/TampilSK', 'refresh');
    }


    function editskbimbingan($Id_Sk)
    {
        $this->db->where('Id_Sk', $Id_Sk);
        $query = $this->db->get('skpembimbing');

        if ($query->num_rows() > 0) {

            $data = $query->row();
            echo "<script>$('#Id_Sk').val('" . $data->Id_Sk . "');</script>";
            echo "<script>$('#semester').val('" . $data->Semester . "');</script>";
            echo "<script>$('#tahunajaran').val('" . $data->tahunajaran . "');</script>";
            echo "<script>$('#NamaFile').val('" . $data->File_Sk . "');</script>";
            echo "<script>$('#FileSk').val('" . base_url('document/' . $data->File_Sk) . "');</script>";
        }
    }

    function hapusdata($Id_Sk)
    {
        $this->db->where('id_Sk', $Id_Sk);
        $this->db->delete('skpembimbing');
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        redirect('cskbimbingan/TampilSK', 'refresh');
    }
    function tampilskbimbingan()
    {
        $query = $this->db->get('skpembimbing');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
        } else {
            $hasil = '';
        }

        return $hasil;
    }
}
