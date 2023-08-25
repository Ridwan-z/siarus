<?php

class Login extends Controller {
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function index()
	{
		$data['title'] = 'Halaman Login';
		$data['pasien'] = $this->model('LoginModel')->getAllPasien();
		$this->view('login/login', $data);
	}

	// public function prosesLogin() {
	// 	ini_set('display_errors', 1);
	// 	if($row = $this->model('LoginModel')->checkLogin($_POST) > 0 ) {
	// 			$_SESSION['nik'] = $row['nik'];
	// 			$_SESSION['session_login'] = 'sudah_login'; 

	// 			//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);
				
	// 			header('location: '. base_url . '/home');
	// 	} else {
	// 		Flasher::setMessage('NIK / No BPJS','salah.','danger');
	// 		// header('location: '. base_url . '/login');
	// 		// exit;	
	// 	}
	// }

	public function aksi(){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$inputIdentifier = trim($_POST['identifier']);  // Mengambil input baik NIK maupun No. BPJS
			$model = $this->model('LoginModel');
			$userData = $model->log($inputIdentifier);  // Memanggil metode log dengan input pengguna
	
			if ($userData) {
				$_SESSION['session_login'] = 'sudah_login';
				$_SESSION['user_data'] = $userData;
				header('location: ' . base_url . '/home');
			} else {
				Flasher::setMessage('NIK / No. BPJS', 'tidak ditemukan.', 'danger');
				header('location: ' . base_url . '/login');
			}
		} else {
			header('location: ' . base_url . '/login');
		}
	}
	
}