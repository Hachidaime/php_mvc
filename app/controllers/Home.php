<?php

/**
 * @desc this class will handle Home controller
 * 
 * @class Home
 * @extends Controller
 * @author Hachidaime
 */
class Home extends Controller
{
  /**
   * @desc this method will handle default Home page
   * 
   * @method index
   */
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
