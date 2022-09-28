<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_buku extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->model('ModelBuku');
        $data['beranda'] = 'active';
        $data['daftar'] = '';
        $data['login'] = '';
        $this->key = $_GET['id'];
        $data['key'] =  $this->key;
        $data['detailBuku'] = $this->ModelBuku->detailBuku($this->key)->result_array();
        $array =  $this->ModelBuku->detailBuku($this->key)->result_array();
        if (count($array) == 0) {
            $data['message'] = "Buku tidak ditemukan";
            $this->load->view('templates/header', $data);
            $this->load->view('eror', $data);
        } else {
            $id_kategori = ($array[0]['id_kategori']);
            $kategori = $this->ModelBuku->getKategori($id_kategori)->result_array();
            $data['kategori'] = $kategori[0]['kategori'];
            $this->load->view('templates/header', $data);
            $this->load->view('detail_buku', $data);
        }
    }
}