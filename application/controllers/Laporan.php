<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct(){
		parent ::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('home/buatlaporan');
		$this->load->view('templates/footer');
	}

	public function edit($id){
		$data['lapor'] = $this->db->get_where('lapor',['id_lapor'=>$id])->row_array();

		$ekstensi = explode('.', $data['lapor']['lampiran']);
		$data['ekstensi'] = $ekstensi[1];

		$this->load->view('templates/header');
		$this->load->view('home/editlaporan', $data);
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
			'username' => $this->session->userdata('username'),
			'judul' => $judul,
			'isi' => $laporan,
			'aspek' => $aspek,
			'lampiran' => $newfilename,
			'waktu' => $waktu
		];

		$this->db->insert('lapor', $data);
		redirect('home');
	}

	public function editLaporan($id){
		$lapor = $this->db->get_where('lapor',['id_lapor'=>$id])->row_array();

		$judul = $this->input->post('judul');
		$laporan = $this->input->post('laporan');
		$aspek = $this->input->post('aspek');
		$lampiran = $_FILES['file']['name'];
		$waktu = date('j F Y h:i:s A');

		if ($lampiran != "") {
			$dokumen = explode(".",$lampiran);
			$newfilename = round(microtime(true)) . '.' . end($dokumen);
			$path = './assets/lampiran/';
			$oldFile = $lapor['lampiran'];
			$tmp = $_FILES['file']['tmp_name'];

			if(move_uploaded_file($tmp, $path.$newfilename)){
				$file = $path.$newfilename;
				unlink($path.$oldFile);
			}
		}else{
			$newfilename = $lapor['lampiran'];
		}

		$data=[
			'judul' => $judul,
			'isi' => $laporan,
			'aspek' => $aspek,
			'lampiran' => $newfilename,
			'waktu' => $waktu
		];

		$this->db->set($data);
		$this->db->where('id_lapor', $id);
		$this->db->update('lapor');
		redirect('home/detail/'.$id);
	}
}
