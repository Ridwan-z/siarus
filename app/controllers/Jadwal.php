<?php

class Jadwal extends Controller{
    public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	} 
    public function index(){
        $data['title'] = 'Data Jadwal';
        $data['jadwal'] = $this->model('JadwalModel')->getAllJadwal();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('jadwal/index',$data);
        $this->view('templates/footer',$data);
    }
    public function tambah(){
        $data['title'] = 'Tambah data Jadwal';
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('jadwal/tambah',$data);
        $this->view('templates/footer',$data);
    }
    public function edit($id){
        $data['title'] = 'Detail Jadwal';
		$data['jadwal'] = $this->model('JadwalModel')->getJadwalById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', );
		$this->view('jadwal/edit', $data);
		$this->view('templates/footer',$data);
    }
    public function aksiTambah(){
        ini_set('display_errors', 1);
        if( $this->model('JadwalModel')->tambah($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/jadwal');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/jadwal');
			exit;	
		}
    }

    public function aksiUpdate(){	
        ini_set('display_errors', 1);
		if( $this->model('JadwalModel')->update($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/jadwal');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/jadwal');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('JadwalModel')->delete($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/jadwal');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/jadwal');
			exit;	
		}
	}
}