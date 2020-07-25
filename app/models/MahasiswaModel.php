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

    $this->db->query("SELECT * FROM {$this->table}");
    return $this->db->resultSet();
  }
}
