<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'sukses') {
            redirect('Login');
        }
    }


    public function index()
    {
        $data = [
            'title' => 'Data Siswa',
            'siswa' => $this->SiswaModel->getSiswa()
        ];

        $this->load->view('daftar_siswa', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Siswa'
        ];

        if ($this->input->post('submit')) {
            if ($this->SiswaModel->validation("save")) {
                $this->SiswaModel->save();
                $this->session->set_flashdata('success', 'Data berhasil di tambahkan');
                redirect('Siswa');
            }
        }


        $this->load->view('tambah_siswa', $data);
    }

    public function edit($nis)
    {
        if ($this->input->post('submit')) {
            if ($this->SiswaModel->validation('update')) {
                $this->SiswaModel->edit($nis);
                $this->session->set_flashdata('success', 'Data berhasil di ubah');
                redirect('Siswa');
            }
        }

        $data = [
            'title' => 'Edit Data',
            'siswa' => $this->SiswaModel->view_by($nis)
        ];

        $this->load->view('edit_siswa', $data);
    }

    public function delete($nis)
    {
        if ($this->SiswaModel->delete($nis)) {
            redirect('Siswa');
        }
        redirect('Siswa');
    }
}
