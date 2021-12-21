<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buatlaporan extends CI_Controller {
	public function __construct(){
		parent ::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('home/buatlaporan');
		$this->load->view('templates/footer');
	}

	public function submitlaporan(){
		$judul = $this->input->post('judul');
		$laporan = $this->input->post('laporan');
		$aspek = $this->input->post('aspek');
		$lampiran = $_FILES['file']['name'];
		$waktu = date('j F Y h:i:s A');

		$dokumen = explode(".",$lampiran);
		$newfilename = round(microtime(true)) . '.' . end($dokumen);
		$path = './assets/lampiran/';
		$tmp = $_FILES['file']['tmp_name'];

		if(move_uploaded_file($tmp, $path.$newfilename)){
			$file = $path.$newfilename;
		}

		$data=[
			'judul' => $judul,
			'isi' => $laporan,
			'aspek' => $aspek,
			'lampiran' => $newfilename,
			'waktu' => $waktu
		];

		$this->db->insert('lapor', $data);
		redirect('home');
	}
}
