<?php

defined('BASEPATH') or exit('No direct access allowed');

class M_pelanggan extends CI_Model
{
    public function register($data)
    {
        $this->db->insert('tb_pelanggan', $data);
    }
}