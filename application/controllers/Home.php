<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        // echo "This is default function.";
        $data['laporan'] = $this->Laporan_model->getLaporan();
        $data['judul'] = "Simple Lapor";

        $this->load->view('template/header', $data);

        $this->load->view('home_page');

        $this->load->view('template/footer');
    }
    public function detail($id)
    {
        $data["judul"] = "Detail Laporan";
        $data['laporan'] = $this->Laporan_model->detail($id);

        $this->load->view('template/header', $data);
        $this->load->view('detail_laporan');
        $this->load->view('template/footer');
    }
    public function edit($id)
    {
        $data["judul"] = "Detail Laporan";
        $data['laporan'] = $this->Laporan_model->detail($id);

        $this->load->view('template/header', $data);
        $this->load->view('edit/edit_laporan');
        $this->load->view('template/footer');
    }
    public function hapus($id)
    {
        $this->Laporan_model->hapus($id);
        redirect('index.php/Home');
    }

    public function tambah()
    {
        $data["judul"] = "Simple Lapor";
        $this->form_validation->set_rules('isi_laporan', 'Isi Laporan', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('tambah/tambah_laporan');
            $this->load->view('template/footer');
        } else {
            $this->Laporan_model->tambah();
            echo "
            <script>
                alert('Berhasil Menambah Data');
            </script>
            ";
            redirect('index.php/Home');
        }
    }
    public function search($search)
    {
        $data['laporan'] = $this->Laporan_model->search($search);
        $this->load->view('template/header', $data);
        $this->load->view('search/search', $data);
    }
}
