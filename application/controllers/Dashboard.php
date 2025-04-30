<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcerutu');
    }

    // *** Menampilkan Halaman Dashboard ***
    public function index()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    // *** Menampilkan Halaman Data Kategori Produk ***
    public function lihat_dataKategori()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('Admin/data_kategori');
        $this->load->view('template/footer');
    }

    // *** Menampilkan Halaman Data Produk ***
    public function lihat_dataProduk()
{
    $data['item'] = $this->Mcerutu->get_data()->result(); // ambil data dari model
    $this->load->view('template/head');
    $this->load->view('template/sidebar');
    $this->load->view('template/navbar');
    $this->load->view('Admin/data_produk', $data); // kirim data ke view
    $this->load->view('template/footer');
}

    public function data_produk()
    {
        // $data['item'] = $this->db->get_where('item', ['id_produk' => $id_produk])->row_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('admin/add_product');
        $this->load->view('template/footer');
    }

    public function save_product()
    {
        $nama = $this->input->post('nama_produk');
        $kategori = $this->input->post('kategori_produk');
        $stok = $this->input->post('stok_produk');
        $harga = $this->input->post('harga_produk');

        $config['upload_path'] = './bahan/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_produk')) {
            $gambar = $this->upload->data('file_name');
            $data = [
                'nama_produk' => $nama,
                'kategori_produk' => $kategori,
                'stok_produk' => $stok,
                'harga_produk' => $harga,
                'gambar_produk' => $gambar
            ];

            $this->Mcerutu->data_produk($data);
            redirect('dashboard/lihat_dataProduk');
        } else {
            // Bisa redirect ke halaman form lagi + flashdata error jika mau lebih bagus
            echo $this->upload->display_errors();
        }
    }

    public function edit_product($id_produk)
    {
        // Ambil data produk berdasarkan ID
        $data['item'] = $this->db->get_where('item', ['id_produk' => $id_produk])->row_array();
        // Load form untuk edit produk
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('admin/vedit',$data);
        $this->load->view('template/Footer');
    }


    public function update_product()
    {
        $id      = $this->input->post('id_produk');
        $nama    = $this->input->post('nama_produk');
        $kategori = $this->input->post('kategori_produk');
        $stok    = $this->input->post('stok_produk');
        $harga   = $this->input->post('harga_produk');

        $data = [
            'nama_produk' => $nama,
            'kategori_produk' => $kategori,
            'stok_produk' => $stok,
            'harga_produk' => $harga
        ];

        // Cek apakah ada file gambar baru yang diupload
        if (!empty($_FILES['gambar_produk']['name'])) {
            $config['upload_path']   = './assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048;

            if (!is_dir($config['upload_path'])) {
                mkdir($config['upload_path'], 0777, true);
            }

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar_produk')) {
                $upload = $this->upload->data();
                $data['gambar_produk'] = $upload['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('dashboard/lihat_dataProduk');
            }
        }

        $this->Mcerutu->update_product($id, $data);
        redirect('dashboard/lihat_dataProduk');
    }

    public function delete_product($id_produk)
    {
        $this->Mcerutu->mdelete($id_produk);
        redirect('dashboard/lihat_dataProduk');
    }
}
