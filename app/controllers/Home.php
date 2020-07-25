<?php

class Home extends Controller
{
  public function index()
  {
    $data = [
      'judul' => 'Home',
      'nama' => $this->model('UserModel')->getUser()
    ];
    $this->view('Templates/header', $data);
    $this->view('Home/index', $data);
    $this->view('Templates/footer');
  }
}
