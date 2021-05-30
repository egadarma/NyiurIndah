<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login 
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('M_auth');
    }

    public function login($username, $password)
    {
        $cek = $this->ci->M_auth->login_user($username, $password);
        if ($cek) {
            $nama_user = $cek->nama_user;
            $username = $cek->username;
            $level_user = $cek->level_user;

            $this->ci->session->set_userdata('username',$username);
            $this->ci->session->set_userdata('nama_user',$nama_user);
            $this->ci->session->set_userdata('level_user',$level_user);
            redirect('admin');

        }else {
            $this->ci->session->set_flashdata('error','Username atau Password salah');
            redirect('auth/login_user');
        }
    }
    public function cek_login()
    {
        if ($this->ci->session->userdata('username') == '') {
            $this->ci->session->set_flashdata('error','Anda Belum Login!!!');
            redirect('auth/login_user');
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('nama_user');
        $this->ci->session->unset_userdata('level_user');
        $this->ci->session->set_flashdata('pesan','Anda Berhasil Logout!!!');
        redirect('auth/login_user');
    }
}
