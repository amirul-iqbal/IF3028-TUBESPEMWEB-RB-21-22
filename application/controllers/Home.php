<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
    }
    public function index()
    {
        // echo "This is default function.";
        $data['laporan'] = $this->Laporan_model->getLaporan();
        $data["judul"] = "Simple Lapor";

        $this->load->view('template/header', $data);

        $this->load->view('home_page');

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
    public function search($search)
    {
        $data['laporan'] = $this->Laporan_model->search($search);
        $data['coba'] = $search;
        $this->load->view('home/search', $data);
    }
}
