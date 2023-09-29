<?php

class Home extends Controller {
	
	public function index()
	{
		$data['title'] = 'Puskesmas blablabla';
		$data['dokter'] = $this->model('DokterModel')->getAllDokter();
		$this->view('home/index', $data);
	}
}