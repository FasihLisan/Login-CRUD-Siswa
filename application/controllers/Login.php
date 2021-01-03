<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_login');
    }
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        $this->load->view('form_login', $data);
    }
    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $berhasil = $this->user_login->login($username, $password);

        if ($berhasil == 1) {
            $this->session->set_flashdata('success', 'selamat datang, ' . $username);
            $this->session->set_userdata(array('status' => 'sukses'));
            redirect('Siswa');
        } else {
            $this->session->set_flashdata('gagal', 'username atau password anda salah!');
            $this->load->view('form_login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
