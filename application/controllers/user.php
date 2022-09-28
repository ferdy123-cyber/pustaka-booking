<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->model('ModelBuku');
        $data['beranda'] = '';
        $data['daftar'] = 'active';
        $data['login'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('daftar', $data);
    }
    public function login()
    {
        $this->load->model('ModelBuku');
        $data['beranda'] = '';
        $data['daftar'] = '';
        $data['login'] = 'active';
        $this->load->view('templates/header', $data);
        $this->load->view('login', $data);
    }
}