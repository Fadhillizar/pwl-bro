<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mcerutu extends CI_Model
{

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('item');
        $query = $this->db->get();
        return $query;
    }
    public function tampil_data()
    {
        return $this->db->get('produk');
    }

    public function data_produk($data)
    {
        return $this->db->insert('item', $data);
    }

    public function mdelete($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->delete('item');
    }

    // Ambil 1 produk berdasarkan ID (buat fitur edit nanti)
    public function get_product_by_id($id)
    {
        return $this->db->get_where('item', ['id_produk' => $id])->row();
    }


    // Update produk
    public function update_product($id, $data)
    {
        $this->db->where('id_produk', $id);
        return $this->db->update('item', $data);
    }
}
