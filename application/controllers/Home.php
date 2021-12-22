<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->db->order_by('id_lapor', 'DESC');
		$data['lapor'] = $this->db->get('lapor')->result_array();

		$this->load->view('templates/header');
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}

	public function load_data(){
		$key = $this->input->get('key');
		$query = "SELECT * FROM lapor WHERE judul LIKE '%$key%' OR isi LIKE '%$key%' ORDER BY `lapor`.`id_lapor` DESC";
		$data['lapor'] = $this->db->query($query)->result_array();

		foreach ($data['lapor'] as $lp) {
			echo '
			<div class="komentar-body">
				<div class="laporan-box-container">
					<div class="laporan-text">
						<h4>'.$lp['judul'].'</h4>
						<p class=ket-waktu>Waktu : '.$lp['waktu'].'</p>
						<p class=ket-waktu>Aspek : '.$lp['aspek'].'</p>
						<p>'.$lp['isi'].'</p>
					</div>
					<div class="selengkapnya-container">
						<div class="row-1">
							<a href="'.base_url('assets/lampiran/').$lp['lampiran'].'" download>Lampiran: '.$lp['lampiran'].'</a>
						</div>
						<div class="row-2">
							<a href="'.base_url('home/detail/').$lp['id_lapor'].'">Lihat Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>';
		}
	}

	public function load_user(){
		$value = $_GET['query'];
		$field = $_GET['field'];

		if ($field == "uname") {
			$user = $this->db->get_where('user',['username'=>$value])->row_array();
			if ($user != NULL) {
				echo "Username sudah terdaftar!";
				exit();
			}
		}

		if ($field == "password") {
			if (strlen($value)<8) {
				echo "Password harus terdiri dari minimal 8 huruf!";
				exit();
			}
		}

		if ($field == "unameLogin") {
			$user = $this->db->get_where('user',['username'=>$value])->row_array();
			if ($user == NULL) {
				echo "User tidak terdaftar";
				exit();
			}
		}

		if ($field == "passwordLogin") {
			if (strlen($value)<1) {
				echo "Tolong isi kolom password!";
				exit();
			}
		}
	}

	public function auth(){
		$uname = $this->input->post('username');
		$password = $this->input->post('password');
		$submit = $this->input->post('type');
		
		if ($submit == 'Register') {
			$data = [
				'username' => $uname,
				'password' => $password
			];

			$this->db->insert('user', $data);
			$this->session->set_userdata('username', $uname);
		}else{
			$user = $this->db->get_where('user',['username'=>$uname])->row_array();
			if ($user) {
				if ($user['password']==$password) {
					$this->session->set_userdata('username', $uname);
				}else{
					echo "password salah";
				}
			}
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('home');
	}

	public function detail($id){
		$data['detail'] = $this->db->get_where('lapor',['id_lapor' => $id])->row_array();

		$this->load->view('templates/header');
		$this->load->view('home/detail',$data);
		$this->load->view('templates/footer');
	}
}
