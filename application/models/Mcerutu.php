<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mcerutu extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('produk');
    }

    //produk
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('item');
        $query = $this->db->get();
        return $query;
    }

    public function mdelete($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->delete('item');
    }

    public function data_produk($data)
    {
        return $this->db->insert('item', $data);
    }

    public function update_product($id, $data)
    {
        $this->db->where('id_produk', $id);
        return $this->db->update('item', $data);
    }

    // kategori
    public function get_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $query = $this->db->get();
        return $query;
    }

    public function data_kategrori($data)
    {
        return $this->db->insert('kategori', $data);
    }

    public function mdelete_kategori($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->delete('kategori');
    }


    public function update_kategori($id, $data)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->update('kategori', $data);
    }

    public function total_produk()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('item');
        $query = $this->db->get();
        $result = $query->row();
        return $result->total;
    }

    public function total_user()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('user');
        $query = $this->db->get();
        $result = $query->row();
        return $result->total;
    }
}
