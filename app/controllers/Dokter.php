<?php

class Dokter extends Controller{
    public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	} 
    public function index(){
        $data['title'] = 'Data Dokter';
        $data['dokter'] = $this->model('DokterModel')->getAllDokter();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('dokter/index',$data);
        $this->view('dokter/footer',$data);
    }
    public function tambah(){
        $data['title'] = 'Tambah data Dokter';
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('dokter/tambah',$data);
        $this->view('dokter/footer',$data);
    }
    public function edit($id){
        $data['title'] = 'Detail Dokter';
		$data['dokter'] = $this->model('DokterModel')->getDokterById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', );
		$this->view('dokter/edit', $data);
		$this->view('templates/footer',$data);
    }
    public function aksiTambah(){
        if( $this->model('DokterModel')->tambah($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/dokter');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/dokter');
			exit;	
		}
    }

    public function aksiUpdate(){	
        ini_set('display_errors', 1);
		if( $this->model('DokterModel')->update($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/dokter');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/dokter');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('DokterModel')->delete($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/dokter');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/dokter');
			exit;	
		}
	}
}