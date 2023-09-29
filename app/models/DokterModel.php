<?php 
class DokterModel{
    private $table = 'dokter';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllDokter()
	{
		$this->db->query("SELECT dokter.*, jadwal.jam_mulai,jadwal.jam_selesai FROM " . $this->table . " JOIN jadwal ON jadwal.id_jadwal = dokter.id_jadwal");
		return $this->db->resultSet();
	}

    public function getDokterById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_dokter=:id_dokter');
		$this->db->bind('id_dokter',$id);
		return $this->db->single();
	}

    public function tambah($data)
	{
		$file = $this->upload();
		if( !$file ){
			return false;
		}
		$data = array(
			'nama' => $_POST['nama'],
			'spesialisasi' => $_POST['spesialisasi'],
			'telepon' => $_POST['telepon'],
			'email' => $_POST['email'],
			'id_jadwal' => $_POST['id_jadwal'],
			'file' => $file,
		);

		$query = "INSERT INTO " .$this->table ."(nama, spesialisasi, telepon, email, id_jadwal, file) VALUES(:nama, :spesialisasi, :telepon, :email, :id_jadwal, :file)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('spesialisasi',$data['spesialisasi']);
		$this->db->bind('telepon',$data['telepon']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('id_jadwal',$data['id_jadwal']);
		$this->db->bind('file',$data['file']);
		$this->db->execute();

		return $this->db->rowCount();
	}

    public function update($data)
	{
		$data = array(
			'id_dokter' => $_POST['id_dokter'],
			'nama' => $_POST['nama'],
			'spesialisasi' => $_POST['spesialisasi'],
			'telepon' => $_POST['telepon'],
			'email' => $_POST['email'],
			'id_jadwal' => $_POST['id_jadwal'],
			'file' => ($_FILES['file']['error'] === 4) ? $_POST['fileLama'] : $this->upload(),
		);
		$query = "UPDATE " .$this->table . " SET nama=:nama, spesialisasi=:spesialisasi, telepon=:telepon, email=:email, id_jadwal=:id_jadwal, file=:file WHERE id_dokter=:id_dokter";
		$this->db->query($query);
		$this->db->bind('id_dokter',$data['id_dokter']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('spesialisasi', $data['spesialisasi']);
		$this->db->bind('telepon',$data['telepon']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('id_jadwal', $data['id_jadwal']);
		$this->db->bind('file',$data['file']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function delete($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_dokter=:id_dokter');
		$this->db->bind('id_dokter',$id);
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

		$img = imagecreatefromstring(file_get_contents($lokasiBaruB));
    $width = imagesx($img);
    $height = imagesy($img);
    $newSize = min($width, $height);
    $croppedImg = imagecrop($img, ['x' => 0, 'y' => 0, 'width' => $newSize, 'height' => $newSize]);

    if ($croppedImg !== false) {
        // Simpan gambar yang sudah di-crop
        imagejpeg($croppedImg, $lokasiBaruB);

        // Hapus gambar asli yang belum di-crop (jika perlu)
        // unlink($lokasiBaruB);

        // Hapus gambar yang sudah di-crop dari memori
        imagedestroy($croppedImg);
    }
	
		return $namaBaruB;

	}
}