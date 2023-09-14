<?php

class LoginModel {
	
	private $table = 'pasien';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPasien(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	// public function checkLogin($data)
	// {
	// 	$query = "SELECT * FROM pasien WHERE nik = :nik";
	// 	$this->db->query($query);
	// 	$this->db->bind('nik', $data['nik']);
	// 	$data =  $this->db->single();
	// 	return $data;
	// }

	public function log($identifier){
		$query = "SELECT * FROM pasien WHERE nik = :identifier OR no_bpjs = :identifier";  // Menggabungkan kedua kemungkinan dalam satu query
		$this->db->query($query);
		$this->db->bind('identifier', $identifier);
		$data =  $this->db->single();
		return $data;
	}
	
	public function logadmin($username, $password) {
    $query = "SELECT * FROM user WHERE username = :username AND password = :password";
    $this->db->query($query);
    $this->db->bind('username', $username);
    $this->db->bind('password', $password);
    
    $data = $this->db->single();
        return $data; // Jika ditemukan, kembalikan data pengguna
    
	}
}