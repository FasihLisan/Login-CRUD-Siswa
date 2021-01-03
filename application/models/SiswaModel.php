<?php

class siswaModel extends CI_Model
{
    public function getSiswa()
    {
        return $this->db->get('siswa')->result();
    }
    public function view_by($nis)
    {
        return $this->db->get_where('siswa', array('nis' => $nis))->row();
    }
    public function validation($mode)
    {
        if ($mode == "save") {
            $this->form_validation->set_rules('input_nis', 'nis', 'required|numeric|max_length[11]|is_unique[siswa.nis]');
            $this->form_validation->set_rules('input_nama', 'nama', 'required|max_length[50]');
            $this->form_validation->set_rules('input_jenis_kelamin', 'jenis kelamin', 'required');
            $this->form_validation->set_rules('input_telepone', 'telepone', 'required|numeric|max_length[15]');
            $this->form_validation->set_rules('input_alamat', 'alamat', 'required');

            if ($this->form_validation->run()) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            $this->form_validation->set_rules('input_nis', 'nis', 'numeric|max_length[11]');
            $this->form_validation->set_rules('input_nama', 'nama', 'max_length[50]');
            $this->form_validation->set_rules('input_jenis_kelamin', 'jenis kelamin', 'required');
            $this->form_validation->set_rules('input_telepone', 'telepone', 'numeric|max_length[15]');
            $this->form_validation->set_rules('input_alamat', 'alamat', '');

            if ($this->form_validation->run()) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
    public function save()
    {
        $data = [
            "nis" => $this->input->post('input_nis'),
            "nama" => $this->input->post('input_nama'),
            "jenis_kelamin" => $this->input->post('input_jenis_kelamin'),
            "telp" => $this->input->post('input_telepone'),
            "alamat" => $this->input->post('input_alamat')
        ];


        $this->db->insert('siswa', $data);
    }

    public function edit($nis)
    {
        $data = [
            // "nis" => $this->input->post('input_nis'),
            "nama" => $this->input->post('input_nama'),
            "jenis_kelamin" => $this->input->post('input_jenis_kelamin'),
            "telp" => $this->input->post('input_telepone'),
            "alamat" => $this->input->post('input_alamat')
        ];

        $this->db->where('nis', $nis);
        $this->db->update('siswa', $data);
    }
    public function delete($nis)
    {
        if ($this->db->delete('siswa', array('nis' => $nis))) {
            $this->session->set_flashdata('success', 'Data berhasil di hapus');
        }
    }
}
