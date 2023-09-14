<?php

class UserModel {
	
	private $table = 'user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllUser()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getUserById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
		$this->db->bind('id_user',$id);
		return $this->db->single();
	}

	public function tambahUser($data)
	{
		$file = $this->upload();
		if( !$file ){
			return false;
		}
		$data = array(
			'nama' => $_POST['nama'],
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'lvl' => $_POST['lvl'],
			'nik' => $_POST['nik'],
			'file' => $file,
		);

		$query = "INSERT INTO user (nama,username,password,lvl,nik,file) VALUES(:nama,:username,:password,:lvl,:nik,:file)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password', $data['password']);
		$this->db->bind('lvl',$data['lvl']);
		$this->db->bind('nik',$data['nik']);
		$this->db->bind('file',$data['file']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cekUsername(){
		$username = $_POST['username'];
		$this->db->query("SELECT * FROM user WHERE username = :username");
		$this->db->bind('username', $username);
		return $this->db->single();
	}

	public function updateDataUser($data)
	{
		if(empty($_POST['password'])) {
			$query = "UPDATE user SET nama=:nama WHERE id_user=:id_user";
			$this->db->query($query);
			$this->db->bind('id_user',$data['id_user']);
			$this->db->bind('nama',$data['nama']);
		} else {
			$query = "UPDATE user SET nama=:nama, password=:password WHERE id_user=:id_user";
			$this->db->query($query);
			$this->db->bind('id_user',$data['id_user']);
			$this->db->bind('nama',$data['nama']);
			$this->db->bind('password',md5($data['password']));
		}
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteUser($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_user=:id_user');
		$this->db->bind('id_user',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	function upload() {
		
		$b = $_FILES['file']['name'];
		$lokasiTmpB = $_FILES['file']['tmp_name'];
		$ukuran = $_FILES['file']['size'];
		$error = $_FILES['file']['error'];

		if( $error === 4 ){
			echo "<script>
					alert('Masukan file terlebih dahulu!');
				</script>";
			return false;
		}

		$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
		$xB = explode('.', $b);
		$ekstensi = strtolower(end($xB));

		if( !in_array($ekstensi, $ekstensi_diperbolehkan) ){
			echo "<script>
					alert('Yang anda upload bukan gambar!);
				</script>";
			return false;
		}

		if ($ukuran > 1000000) {
			echo "<script>
					alert('Ukuran file terlalu besar!);
				</script>";
				return false;
			}

		$namaBaruB = $b . '-' .uniqid() . '.' . $ekstensi ;
		$lokasiBaruB = './files/' . $namaBaruB;
		move_uploaded_file($lokasiTmpB, $lokasiBaruB);
		return $namaBaruB;

	}
}