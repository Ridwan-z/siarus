<?php

class Home extends Controller {
	
	public function index()
	{
		$data['title'] = 'Halaman Home';
		$this->view('frontend/header',$data);
		$this->view('home/index', $data);
		$this->view('frontend/footer');
	}

	public function hubungi(){
		$data['title'] = 'Halaman Hubungi Kami';
		$this->view('frontend/header',$data);
		$this->view('home/hubungi',$data);
		$this->view('frontend/footer');
	}

	public function profile(){
		$data['title'] = 'Halaman Profile';
		$this->view('frontend/header',$data);
		$this->view('home/profile',$data);
		$this->view('frontend/footer');
	}
}