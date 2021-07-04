<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_pelanggan');
        $this->load->model('m_auth');
    }

    public function register()
	{
        $this->form_validation->set_rules('username','Nama Pelanggan','required',array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email','E-mail','required|is_unique[tb_pelanggan.email]',array('required' => '%s Harus Diisi !!!', 'is_unique' => '%s Email Ini Sudah Terdaftar!!! ' ));
        $this->form_validation->set_rules('password','Password','required',array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('ulangi_password','Ulangi Password','required|matches[password]',array('required' => '%s Harus Diisi !!!', 'matches' => '%s Password Tidak Sama!!! '));

        if ($this->form_validation->run() == FALSE) {
        $data = array(
            'title' => 'Register Pelanggan',
            'isi' => 'v_register',
        );
        $this->load->view('v_register',$data,FALSE);
        }else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            $this->m_pelanggan->register($data);
            $this->session->set_flashdata('pesan', 'Register Berhasil, Silahkan Login....');
            redirect('pelanggan/register');
        }	
	}

    public function login()
    {
        $this->form_validation->set_rules('email','E-mail','required', array(
            'required' => '%s Harus Di Isi!!!'
        ));
        $this->form_validation->set_rules('password','Password','required', array(
            'required' => '%s Harus Di Isi!!!'
        ));

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->pelanggan_login->login($email, $password);
        }
        $data = array(
            'title' => 'Login Pelanggan',
            'isi' => 'v_login_pelanggan',
        );
        $this->load->view('v_login_pelanggan',$data,FALSE);
    }

    public function logout()
    {
        $this->pelanggan_login->logout();
    }

    public function akun()
    {
        //proteksi halaman
        $this->pelanggan_login->cek_login();
        $data = array(
            'title' => 'Akun Saya',
            'isi' => 'v_akun_saya',
        );
        $this->load->view('layout/v_wrapper_frontend',$data,FALSE);
    }
}