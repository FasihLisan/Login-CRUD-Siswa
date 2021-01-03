<?php
class user_login extends CI_Model
{
    public function login($username, $password)
    {
        $cek = $this->db->get_where('tb_akun', array('username' => $username, 'password' => md5($password)));
        if ($cek->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
