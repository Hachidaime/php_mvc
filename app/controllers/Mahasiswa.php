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
}
