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

	public function checkLogin($data)
	{
		$query = "SELECT * FROM pasien WHERE nik = :nik";
		$this->db->query($query);
		$this->db->bind('nik', $data['nik']);
		$data =  $this->db->single();
		return $data;
	}

	public function log($identifier){
		$query = "SELECT * FROM pasien WHERE nik = :identifier OR no_bpjs = :identifier";  // Menggabungkan kedua kemungkinan dalam satu query
		$this->db->query($query);
		$this->db->bind('identifier', $identifier);
		$data =  $this->db->single();
		return $data;
	}
	
	public function logadmin($data){
		if(isset($_POST['login']))
		{
			if(isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']))
			{
				$username = trim($_POST['username']);
				$password = trim($_POST['password']);
		 
				if(filter_var($username))
				{
					$query = "SELECT * FROM user WHERE username = :username ";
					$this->db->query($query);
					$this->db->bind('username', $username);
					$this->db->execute();
					if($this->db->rowCount() > 0)
					{
						$getRow = $this->db->single();
						if(password_verify($password, $getRow['password']))
						{
							unset($getRow['password']);
							$_SESSION['session_login'] = 'sudah_login'; 
							// $_SESSION['nama'] = $getRow['nama'];
							// $_SESSION['lvl'] = $getRow['lvl'];
							$_SESSION = $getRow;
							return $getRow;
						}
						else
						{
							Flasher::setMessage('Username / Password','salah.','danger');
							header('location: '. base_url . '/login');
							exit;
						}
					}
					else
					{
						Flasher::setMessage('Username / Password','salah.','danger');
						header('location: '. base_url . '/login');
					}
					
				}
				else
				{
					Flasher::setMessage('Username / Password','salah.','danger');
					header('location: '. base_url . '/login');
				}
		 
			}
			else
			{
				Flasher::setMessage('Username / Password','salah.','danger');
				header('location: '. base_url . '/login');	
			}
		}
	}

}