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
        $this->view('templates/footer',$data);
    }
    public function edit($id){
        $data['title'] = 'Detail data Pasien';
        $data['pasien'] = $this->model('PasienModel')->getPasienById($id);
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('pasien/edit',$data);
        $this->view('templates/footer',$data);
    }
    public function aksiUpdate(){	
        ini_set('display_errors', 1);
		if( $this->model('PasienModel')->update($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/pasien');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/pasien');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('PasienModel')->delete($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/pasien');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/pasien');
			exit;	
		}
	}
}