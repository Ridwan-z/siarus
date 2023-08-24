<?php

class Login extends Controller {
	public function index()
	{
		$data['title'] = 'Halaman Login';
		$this->view('templates/header', $data);
		// $this->view('templates/sidebar', $data);
		$this->view('login/login', $data);
		$this->view('templates/footer');
	}

	public function prosesLogin() {
		ini_set('display_errors', 1);
		if($row = $this->model('LoginModel')->checkLogin($_POST) > 0 ) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['session_login'] = 'sudah_login'; 

				//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);
				
				header('location: '. base_url . '/home');
		} else {
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. base_url . '/login');
			exit;	
		}
	}
}