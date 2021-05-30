<?php

defined('BASEPATH') or exit('No direct access allowed');

class M_home extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori','left');
        $this->db->order_by('id_barang', 'desc');
        return $this->db->get()->result();
    }
}