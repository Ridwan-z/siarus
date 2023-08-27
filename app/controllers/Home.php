<?php

class Home extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	} 
	public function index()
	{
		$data['title'] = 'Halaman Home';
		$this->view('frontend/header',$data);
		$this->view('home/index', $data);
		$this->view('frontend/footer');
	}

	public function hubungi(){
		$data['title'] = 'Halaman Hubungi Kami';
		$this->view('frontend/header',$data);
		$this->view('home/hubungi',$data);
		$this->view('frontend/footer');
	}
}