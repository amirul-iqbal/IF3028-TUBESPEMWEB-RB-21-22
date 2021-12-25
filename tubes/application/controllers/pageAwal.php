<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pageAwal extends CI_Controller
{
    public function index($halaman = 'halamanAwal')
    {
        $data['konten'] = $this->post_model->get_konten();

        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('halaman/' . $halaman, $data);
        $this->load->view('template/footer');
    }
}
