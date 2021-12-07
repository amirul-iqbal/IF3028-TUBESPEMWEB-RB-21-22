<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {

        // echo "This is default function.";
        $data["judul"] = "Simple Lapor";
        $this->load->view('template/header', $data);
        $this->load->view('home_page');
        // $this->load->view('tambah-laporan');
        $this->load->view('template/footer');
    }
    public function hello()
    {
        echo "This is hello function.";
    }
    public function buat()
    {
        $data["judul"] = "Simple Lapor";
        $this->load->view('template/header', $data);
        $this->load->view('tambah-laporan');
        $this->load->view('template/footer');
    }
    public function login()
    {
            $data["judul"] = "Login | DL Logistik";
    }
}
?>