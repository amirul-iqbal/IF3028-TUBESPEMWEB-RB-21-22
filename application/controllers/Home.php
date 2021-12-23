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
        $this->load->view('tambah_laporan');

        $this->load->view('template/footer');
    }

    public function buat()
    {
        $data["judul"] = "Simple Lapor";

        $this->load->view('template/header', $data);

        $this->load->view('tambah_laporan');

        $this->load->view('template/footer');
    }

    public function detail()
    {
        $data["judul"] = "Simple Lapor";

        $this->load->view('template/header', $data);

        $this->load->view('detail_laporan');

        $this->load->view('template/footer');
    }
}
