<?php

/**
 * @desc this class will handle Mahasiswa Controller
 * 
 * @class Mahasiswa
 * @extends Controller
 * @author Hachidaime
 */
class Mahasiswa extends Controller
{
  /**
   * @desc this method will handle default Mahasiswa page
   * 
   * @method index
   */
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

  /**
   * @desc this method will handle Detail Mahasiswa page
   * 
   * @method default
   * @param int $id is Mahasiswa id
   */
  public function detail(int $id)
  {
    $data = [
      'judul' => 'Data Mahasiswa',
      'mhs' => $this->model('MahasiswaModel')->getMahasiswa($id)
    ];

    $this->view('Templates/header', $data);
    $this->view('Mahasiswa/detail', $data);
    $this->view('Templates/footer');
  }

  /**
   * @desc this method will handle Add Data Mahasiswa
   * 
   * @method tambah
   */
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

  /**
   * @desc this method will handle Delete Data Mahasiwa
   * 
   * @method hapus
   * @param int $id is Mahasiswa id
   */
  public function hapus(int $id)
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

  /**
   * @desc this method will handle get Mahasiswa Data to edit
   * 
   * @method getUbah
   */
  public function getUbah()
  {
    echo json_encode($this->model('MahasiswaModel')->getMahasiswa($_POST['id']));
  }

  /**
   * @desc this method will handle Update Data Mahasiswa
   * 
   * @method ubah
   */
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

  /**
   * @desc this method will handle Search Data Mahasiswa
   * 
   * @method cari
   */
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
