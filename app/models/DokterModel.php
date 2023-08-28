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
		$query = "INSERT INTO dokter (nama,spesialisasi,id_jadwal) VALUES(:nama,:spesialisasi,:id_jadwal)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('spesialisasi',$data['spesialisasi']);
		$this->db->bind('id_jadwal',$data['id_jadwal']);
		$this->db->execute();

		return $this->db->rowCount();
	}

    public function update($data)
	{
		$query = "UPDATE dokter SET nama=:nama, spesialisasi=:spesialisasi, id_jadwal=:id_jadwal WHERE id_dokter=:id_dokter";
		$this->db->query($query);
		$this->db->bind('id_dokter',$data['id_dokter']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('spesialisasi', $data['spesialisasi']);
		$this->db->bind('id_jadwal', $data['id_jadwal']);
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
}