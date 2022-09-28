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
        $this->key = $_GET['id'];
        $data['key'] =  $this->key;
        $data['detailBuku'] = $this->ModelBuku->detailBuku($this->key)->result_array();
        $array =  $this->ModelBuku->detailBuku($this->key)->result_array();
        if (count($array) == 0) {
            $data['message'] = "Buku tidak ditemukan";
            $this->load->view('templates/header', $data);
            $this->load->view('eror', $data);
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('detail_buku', $data);
        }
    }
}