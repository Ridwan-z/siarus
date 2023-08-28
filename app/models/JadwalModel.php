<?php 
class JadwalModel{
    private $table = 'jadwal';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllJadwal()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

    public function getJadwalById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_jadwal=:id_jadwal');
		$this->db->bind('id_jadwal',$id);
		return $this->db->single();
	}

    public function tambah($data)
	{
		$query = "INSERT INTO jadwal (hari,jam_mulai,jam_selesai) VALUES(:hari,:jam_mulai,:jam_selesai)";
		$this->db->query($query);
		$this->db->bind('hari',$data['hari']);
		$this->db->bind('jam_mulai',$data['jam_mulai']);
		$this->db->bind('jam_selesai',$data['jam_selesai']);
		$this->db->execute();

		return $this->db->rowCount();
	}

    public function update($data)
	{
		$query = "UPDATE jadwal SET hari=:hari, jam_mulai=:jam_mulai, jam_selesai=:jam_selesai WHERE id_jadwal=:id_jadwal";
		$this->db->query($query);
		$this->db->bind('id_jadwal',$data['id_jadwal']);
		$this->db->bind('hari', $data['hari']);
		$this->db->bind('jam_mulai', $data['jam_mulai']);
		$this->db->bind('jam_selesai', $data['jam_selesai']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function delete($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_jadwal=:id_jadwal');
		$this->db->bind('id_jadwal',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}