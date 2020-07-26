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
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/Mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/Mahasiswa');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('MahasiswaModel')->hapusData($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/Mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/Mahasiswa');
      exit;
    }
  }

  public function getUbah()
  {
    echo json_encode($this->model('MahasiswaModel')->getMahasiswa($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('MahasiswaModel')->ubahData($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASE_URL . '/Mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASE_URL . '/Mahasiswa');
      exit;
    }
  }

  public function cari()
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
