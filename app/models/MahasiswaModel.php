<?php

/**
 * @desc this class will handle Mahasiswa model
 * 
 * @class MahasiswaModel
 * @author Hachidaime
 */
class MahasiswaModel
{
  /**
   * @var string $table is table name
   */
  private $table = 'mahasiswa';

  /**
   * @var Database $db is database controller
   */
  private $db;

  /**
   * @desc this method will handle as constructor function
   * 
   * @method __construct
   */
  public function __construct()
  {
    $this->db = new Database;
  }

  /**
   * @desc this method will handle to get Mahasiswa data
   * 
   * @method getMahasiswa
   * @param int $id is Mahasiswa id
   * @return array
   */
  public function getMahasiswa(int $id = null)
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

  /**
   * @desc this method will hancle add Mahasiswa data
   * 
   * @method tambahData
   * @param array $data is input field data
   * @return int is number of affected row
   */
  public function tambahData(array $data)
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

  /**
   * @desc this method will handle update Mahasiswa Data
   * 
   * @method ubahData
   * @param array $data is input field data
   * @return int is number of affected row
   */
  public function ubahData(array $data)
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

  /**
   * @desc this method will handle delete Mahasiswa Data
   * 
   * @method ubahData
   * @param int $id is Mahasiswa id
   * @return int is number of affected row
   */
  public function hapusData(int $id)
  {
    $query = "DELETE FROM {$this->table} WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
