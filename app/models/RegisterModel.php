<?php

class RegisterModel {
	
	private $table = 'pasien';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function registerPasien($data)
	{
		$query = "INSERT INTO pasien (nik, nama, tgl_lahir, jenis_kelamin, no_hp, alamat, no_bpjs, provinsi, kabupaten, kecamatan, kelurahan) VALUES(:nik, :nama, :tgl_lahir, :jenis_kelamin, :no_hp, :alamat, :no_bpjs, :provinsi, :kabupaten, :kecamatan, :kelurahan)";
		$this->db->query($query);
		$this->db->bind('nik', $data['nik']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('tgl_lahir', $data['tgl_lahir']);
		$this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
		$this->db->bind('no_hp', $data['no_hp']);
		$this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_bpjs', $data['no_bpjs']);
    	$this->db->bind('provinsi', 'Jawa Timur');
    	$this->db->bind('kabupaten', 'Jember');
    	$this->db->bind('kecamatan', 'Semboro');
		$this->db->bind('kelurahan', $data['kelurahan']);
		$this->db->execute();

		return $this->db->rowCount();
	}

}