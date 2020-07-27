<?php

/**
 * @desc this class will handle About controller
 * 
 * @class About
 * @extends Controller
 * @author Hachidaime
 */
class About extends Controller
{
  /**
   * @desc this method will handle default About page
   * 
   * @method index
   * @param string $name is name
   * @param string $pekerjaan is job
   * @param int $umur is age
   */
  public function index(string $nama = 'Cold', string $pekerjaan = 'Web Developer', int $umur = 25)
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

  /**
   * @desc this method will handle Page page
   * 
   * @method page
   */
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
