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

	public function loginadmin(){
		$data['title'] = 'Halaman Login';
		
		$this->view('login/admin', $data);
	}

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

	public function aksiadmin(){
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$inputUsername = trim($_POST['username']);  
			$inputPassword = trim($_POST['password']); 
			$model = $this->model('LoginModel');
			$userData = $model->logadmin($inputUsername, $inputPassword);  // Memanggil metode log dengan input pengguna
	
			if ($userData) {
				$_SESSION['session_login_admin'] = 'admin_sudah_login';
				$_SESSION['user_data'] = $userData;
				header('location: ' . base_url . '/dashboard');
			} else {
				Flasher::setMessage('Username dan Password', 'tidak ditemukan.', 'danger');
				header('location: ' . base_url . '/login/loginadmin');
			}
		} else {
			header('location: ' . base_url . '/login/loginadmin');
		}
	}
	
	
}