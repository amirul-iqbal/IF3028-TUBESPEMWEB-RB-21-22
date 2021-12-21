<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buatlaporan extends CI_Controller {

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('home/buatlaporan');
		$this->load->view('templates/footer');
	}
}
