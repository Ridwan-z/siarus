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
		// Check if the request method is POST
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$inputUsername = trim($_POST['username']);  
			$inputPassword = trim($_POST['password']); 
			$model = $this->model('LoginModel');
			$userData = $model->logadmin($inputUsername, $inputPassword);  // Memanggil metode log dengan input pengguna
	
			if ($userData) {
				// Verify reCAPTCHA
				$recaptchaSecretKey = '6LfhT0AoAAAAAGXn5Io0pttHnMVg0pUEZf0VRYKY'; // Replace with your reCAPTCHA secret key
				$recaptchaResponse = $_POST['g-recaptcha-response'];
				$recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
	
				$recaptchaData = array(
					'secret' => $recaptchaSecretKey,
					'response' => $recaptchaResponse
				);
	
				$options = array(
					'http' => array(
						'header' => "Content-type: application/x-www-form-urlencoded\r\n",
						'method' => 'POST',
						'content' => http_build_query($recaptchaData)
					)
				);
	
				$context = stream_context_create($options);
				$recaptchaResult = file_get_contents($recaptchaUrl, false, $context);
				$recaptchaResult = json_decode($recaptchaResult);
	
				if ($recaptchaResult->success) {
					// reCAPTCHA verification passed
					$_SESSION['session_login_admin'] = 'admin_sudah_login';
					$_SESSION['user_data'] = $userData;
					header('location: ' . base_url . '/dashboard');
				} else {
					// reCAPTCHA verification failed
					Flasher::setMessage('reCAPTCHA verification', 'failed. Please try again.', 'danger');
					header('location: ' . base_url . '/login/loginadmin');
				}
			} else {
				Flasher::setMessage('Username and Password', 'not found.', 'danger');
				header('location: ' . base_url . '/login/loginadmin');
			}
		} else {
			header('location: ' . base_url . '/login/loginadmin');
		}
	}
	
	
	
}