<?php

class Register extends Controller {
	public function index()
	{
		$data['title'] = 'Halaman Register';
		$this->view('register/register', $data);
		
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