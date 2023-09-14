<?php

class Antrian extends Controller{
    public function __construct()
	{	
		if($_SESSION['session_login_admin'] != 'admin_sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login/loginadmin');
			exit;
		}
	} 
    public function index(){
        $data['title'] = 'Data Antrian';
        $data['antrian'] = $this->model('AntrianModel')->getAllAntrian();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('antrian/index',$data);
        $this->view('templates/footer',$data);
    }
    public function tambah(){
        $data['title'] = 'Tambah data Antrian';
        $data['pasien'] = $this->model('PasienModel')->getAllPasien();
        $data['dokter'] = $this->model('DokterModel')->getAllDokter();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('antrian/tambah',$data);
        $this->view('templates/footer',$data);
    }
    public function edit($id){
        $data['title'] = 'Detail Antrian';
        $data['pasien'] = $this->model('PasienModel')->getAllPasien();
        $data['dokter'] = $this->model('DokterModel')->getAllDokter();
		$data['antrian'] = $this->model('AntrianModel')->getAntrianById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', );
		$this->view('antrian/edit', $data);
		$this->view('templates/footer',$data);
    }
    public function aksiTambah(){
        ini_set('display_errors', 1);
        if( $this->model('AntrianModel')->tambah($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/antrian');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/antrian');
			exit;	
		}
    }

    public function aksiUpdate(){	
        ini_set('display_errors', 1);
		if( $this->model('AntrianModel')->update($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/antrian');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/antrian');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('AntrianModel')->delete($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/antrian');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/antrian');
			exit;	
		}
	}
}