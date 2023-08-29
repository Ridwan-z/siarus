<?php 
class PasienModel{
    private $table = 'pasien';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPasien()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getPasienById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_pasien=:id_pasien');
		$this->db->bind('id_pasien',$id);
		return $this->db->single();
	}

	public function update($data)
	{
		$query = "UPDATE pasien SET nik=:nik, nama=:nama, tgl_lahir=:tgl_lahir, jenis_kelamin=:jenis_kelamin, no_hp=:no_hp, no_bpjs=:no_bpjs, alamat=:alamat, provinsi=:provinsi, kabupaten=:kabupaten, kecamatan=:kecamatan, kelurahan=:kelurahan WHERE id_pasien=:id_pasien";
		$this->db->query($query);
		$this->db->bind('id_pasien',$data['id_pasien']);
		$this->db->bind('nik', $data['nik']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('tgl_lahir', $data['tgl_lahir']);
		$this->db->bind('jenis_kelamin',$data['jenis_kelamin']);
		$this->db->bind('no_hp', $data['no_hp']);
		$this->db->bind('no_bpjs', $data['no_bpjs']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('provinsi',$data['provinsi']);
		$this->db->bind('kabupaten', $data['kabupaten']);
		$this->db->bind('kecamatan', $data['kecamatan']);
		$this->db->bind('kelurahan', $data['kelurahan']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function delete($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_pasien=:id_pasien');
		$this->db->bind('id_pasien',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}