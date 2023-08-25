<?php

class Register extends Controller {
	public function index()
	{
		$data['title'] = 'Halaman Register';
		$this->view('templates/header', $data);
		// $this->view('templates/sidebar', $data);
		$this->view('register/register', $data);
		$this->view('templates/footer');
	}
	public function aksi(){
		ini_set('display_errors', 1);
		if( $this->model('RegisterModel')->registerPasien($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/login');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/register');
			exit;	
		}
	}
	
}