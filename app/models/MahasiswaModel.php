<?php
class MahasiswaModel
{
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getMahasiswa($id = null)
  {
    if (!is_null($id)) {
      $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    $query = "SELECT * FROM {$this->table}";
    if (!empty($_POST['keyword'])) $query = "{$query} WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%{$_POST['keyword']}%");

    return $this->db->resultSet();
  }

  public function tambahData($data)
  {
    $query = "INSERT INTO {$this->table} 
      (nama, nrp, email, jurusan)
      VALUES
      (:nama, :nrp, :email, :jurusan)";
    $this->db->query($query);
    foreach ($data as $idx => $value) {
      if ($idx == 'id') continue;
      $this->db->bind($idx, $value);
    }
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function ubahData($data)
  {
    $query = "UPDATE {$this->table} SET
      nama=:nama,
      nrp=:nrp,
      email=:email,
      jurusan=:jurusan
      WHERE id=:id";
    $this->db->query($query);
    foreach ($data as $idx => $value) {
      $this->db->bind($idx, $value);
    }
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusData($id)
  {
    $query = "DELETE FROM {$this->table} WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
