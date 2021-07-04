<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_login
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('M_auth');
    }

    public function login($email, $password)
    {
        $cek = $this->ci->M_auth->login_pelanggan($email, $password);
        if ($cek) {
            $username = $cek->username;
            $email = $cek->email;
            $foto = $cek->foto;

            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('foto', $foto);
            redirect('home');

        }else {
            $this->ci->session->set_flashdata('error','Email atau Password salah');
            redirect('pelanggan/login');
        }
    }
    public function cek_login()
    {
        if ($this->ci->session->userdata('username') == '') {
            $this->ci->session->set_flashdata('error','Anda Belum Login!!!');
            redirect('pelanggan/login');
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('email');
        $this->ci->session->unset_userdata('foto');
        $this->ci->session->set_flashdata('pesan','Anda Berhasil Logout!!!');
        redirect('pelanggan/login');
    }
}
