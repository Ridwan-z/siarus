<?php 
class AntrianModel{
    private $table = 'antrian';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllAntrian()
    {
        $this->db->query("SELECT antrian.*, pasien.nama AS nama_pasien, dokter.nama AS nama_dokter
                        FROM " . $this->table . "
                        JOIN pasien ON pasien.id_pasien = antrian.id_pasien
                        JOIN dokter ON dokter.id_dokter = antrian.id_dokter");
        
        return $this->db->resultSet();
    }


    public function getAntrianById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_antrian=:id_antrian');
		$this->db->bind('id_antrian',$id);
		return $this->db->single();
	}

    public function tambah($data)
	{
		$query = "INSERT INTO antrian (tgl_antrian,keluhan,id_dokter,id_pasien) VALUES(:tgl_antrian,:keluhan,:id_dokter,:id_pasien)";
		$this->db->query($query);
		$this->db->bind('tgl_antrian',$data['tgl_antrian']);
		$this->db->bind('keluhan',$data['keluhan']);
		$this->db->bind('id_dokter',$data['id_dokter']);
        $this->db->bind('id_pasien',$data['id_pasien']);
		$this->db->execute();

		return $this->db->rowCount();
	}

    public function update($data)
	{
		$query = "UPDATE antrian SET tgl_antrian=:tgl_antrian, keluhan=:keluhan, id_dokter=:id_dokter, id_pasien=:id_pasien WHERE id_antrian=:id_antrian";
		$this->db->query($query);
        $this->db->bind('id_antrian',$data['id_antrian']);
        $this->db->bind('tgl_antrian',$data['tgl_antrian']);
		$this->db->bind('keluhan',$data['keluhan']);
		$this->db->bind('id_dokter',$data['id_dokter']);
        $this->db->bind('id_pasien',$data['id_pasien']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function delete($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_antrian=:id_antrian');
		$this->db->bind('id_antrian',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}