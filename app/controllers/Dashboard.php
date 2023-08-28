<?php

class Dashboard extends Controller {
    public function __construct()
    {
        if($_SESSION['session_login'] != 'sudah_login'){
            Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
        }
    }

    public function index(){
        $this->view('templates/header');
        $this->view('templates/sidebar');
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }
}