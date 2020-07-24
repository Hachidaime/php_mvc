<?php

class About extends Controller
{
  public function index($nama = 'Cold', $pekerjaan = 'Web Developer', $umur = 25)
  {
    $data = [
      'judul' => 'About',
      'nama' => $nama,
      'pekerjaan' => $pekerjaan,
      'umur' => $umur,
    ];
    $this->view('Templates/header', $data);
    $this->view('About/index', $data);
    $this->view('Templates/footer');
  }

  public function page()
  {
    $data = [
      'judul' => 'Page',
    ];
    $this->view('Templates/header', $data);
    $this->view('About/page', $data);
    $this->view('Templates/footer');
  }
}
