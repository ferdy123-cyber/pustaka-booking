<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
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
        $data['list_buku']  = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 12);
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('beranda', $data);
    }
}