<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
	}

	public function index(){
		$queryCount = "SELECT * FROM lapor";

		$config['base_url']= 'http://localhost/tubes/home/index';
		$config['total_rows']=$this->db->query($queryCount)->num_rows();
		$config['per_page']=4;
		$config['num_links'] = 0;
		$config['display_pages'] = FALSE;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;

		$config['full_tag_open']='<div class="next-back-page-container">';
		$config['full_tag_close']='</div>';

		$config['next_link']='<button type="button" class="btn">Next !</button>';
		$config['next_tag_open']='<div>';
		$config['next_tag_close']='</div>';

		$config['prev_link']='<button type="button" class="btn">Back !</button>';
		$config['prev_tag_open']='<div>';
		$config['prev_tag_close']='</div>';

		$this->pagination->initialize($config);


		$data['start']=$this->uri->segment(3);
		$this->db->order_by('id_lapor','DESC');
		$data['lapor']=$this->db->get('lapor',$config['per_page'],$data['start'])->result_array();

		$explode = '';
		$countArray=count($data['lapor']);

		for ($j = 0; $j < $countArray; $j++) {
			$temp = '';
			$explode = explode(' ',$data['lapor'][$j]['isi']);
			$count = count($explode);
			for ($i=0; $i < 10; $i++) { 
				$temp .= $explode[$i]." ";
			}
			$data['lapor'][$j]['isi'] = $temp;
		}

		$this->load->view('templates/header');
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}

	public function load_data(){
		$key = $this->input->get('key');
		$query = "SELECT * FROM lapor WHERE judul LIKE '%$key%' OR isi LIKE '%$key%' ORDER BY `lapor`.`id_lapor` DESC";
		$data['lapor'] = $this->db->query($query)->result_array();

		$explode = '';
		$countArray=count($data['lapor']);

		for ($j = 0; $j < $countArray; $j++) {
			$temp = '';
			$explode = explode(' ',$data['lapor'][$j]['isi']);
			$count = count($explode);
			for ($i=0; $i < 10; $i++) { 
				$temp .= $explode[$i]." ";
			}
			$data['lapor'][$j]['isi'] = $temp;
		}

		foreach ($data['lapor'] as $lp) {
			echo '
			<div class="komentar-body">
				<div class="laporan-box-container">
					<div class="laporan-text">
						<h4>'.$lp['judul'].'</h4>
						<p class=ket-waktu>Waktu : '.$lp['waktu'].'</p>
						<p class=ket-waktu>Aspek : '.$lp['aspek'].'</p>
						<p>'.$lp['isi'].'</p>
						<p>Oleh : '.$lp['username'].'</p>
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

	public function load_lapor_user(){
		$key = $this->input->get('username');
		$query = "SELECT * FROM lapor WHERE username = '$key' ORDER BY `lapor`.`id_lapor` DESC";
		$data['lapor'] = $this->db->query($query)->result_array();

		$explode = '';
		$countArray=count($data['lapor']);

		for ($j = 0; $j < $countArray; $j++) {
			$temp = '';
			$explode = explode(' ',$data['lapor'][$j]['isi']);
			$count = count($explode);
			for ($i=0; $i < 10; $i++) { 
				$temp .= $explode[$i]." ";
			}
			$data['lapor'][$j]['isi'] = $temp;
		}

		foreach ($data['lapor'] as $lp) {
			echo '
			<div class="komentar-body">
				<div class="laporan-box-container">
					<div class="laporan-text">
						<h4>'.$lp['judul'].'</h4>
						<p class=ket-waktu>Waktu : '.$lp['waktu'].'</p>
						<p class=ket-waktu>Aspek : '.$lp['aspek'].'</p>
						<p>'.$lp['isi'].'</p>
						<p>Oleh : '.$lp['username'].'</p>
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

		$explode = explode(".",$data['detail']['isi']);
		$count = count($explode);
		$j = 0;
		$k = 0;
		$temp = '';
		$arrayIsi[] = '';

		for ($i=0; $i < $count; $i++) { 
			if ($j != 10) {
				$temp .= $explode[$i]. ". ";
				$j++;
			}else{
				$arrayIsi[$k] = $temp;
				$temp = '';
				$j=0;
				$k++;
			}
		}

		$data['isi'] = $arrayIsi;
		$ekstensi = explode('.', $data['detail']['lampiran']);
		$data['ekstensi'] = $ekstensi[1];

		$this->load->view('templates/header');
		$this->load->view('home/detail',$data);
		$this->load->view('templates/footer');
	}

	public function delete($id){
		$this->db->where('id_lapor', $id);
		$this->db->delete('lapor');
		redirect('home');
	}
}
