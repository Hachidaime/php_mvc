<?php

class Mahasiswa extends Controller
{
  public function index()
  {
    $data = [
      'judul' => 'Mahasiswa',
      'mhs' => $this->model('MahasiswaModel')->getMahasiswa()
    ];

    $this->view('Templates/header', $data);
    $this->view('Mahasiswa/index', $data);
    $this->view('Templates/footer');
  }

  public function detail($id)
  {
    $data = [
      'judul' => 'Data Mahasiswa',
      'mhs' => $this->model('MahasiswaModel')->getMahasiswa($id)
    ];

    $this->view('Templates/header', $data);
    $this->view('Mahasiswa/detail', $data);
    $this->view('Templates/footer');
  }

  public function tambah()
  {
    if ($this->model('MahasiswaModel')->tambahData($_POST) > 0) {
      header('Location: ' . BASE_URL . '/Mahasiswa');
      exit;
    }
  }
}
