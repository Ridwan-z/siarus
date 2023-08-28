<?php

class Pasien extends Controller{
    public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	} 
    public function index(){
        $data['title'] = 'Data Pasien';
        $data['pasien'] = $this->model('PasienModel')->getAllPasien();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('pasien/index',$data);
        $this->view('pasien/footer',$data);
    }
    public function tambah(){
        $data['title'] = 'Tambah data Pasien';
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('pasien/tambah',$data);
        $this->view('pasien/footer',$data);
    }
}