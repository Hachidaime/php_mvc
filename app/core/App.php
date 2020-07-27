<?php

/** 
 * @desc this class will handle main app
 * 
 * @class App
 * @author Hachidaime
 */
class App
{
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  /**
   * @desc this method is constructor function
   *
   * @method __construct
   */
  public function __construct()
  {
    // Todo: parse url
    $url = $this->parseUrl();

    // Todo: check controller file exist
    if (file_exists("../app/controllers/{$url[0]}.php")) {
      $this->controller = $url[0]; // Todo: assign controller from url
      unset($url[0]);
    }

    // Todo: instance controller
    require_once "../app/controllers/{$this->controller}.php";
    $this->controller = new $this->controller;

    // Todo: check method on url
    if (isset($url[1])) { // ? method exist
      // Todo: check method exist on controller
      if (method_exists($this->controller, $url['1'])) {
        $this->method = $url[1]; // Todo: assign method from url
        unset($url[1]);
      }
    }

    // Todo: check params
    if (!empty($url)) {
      $this->params = array_values($url); // Todo: assign params
    }

    // Todo: Call a callback with an array of parameters
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  /**
   * @desc this method will handle parsing url
   * 
   * @method parseUrl
   * @return array $url
   */
  public function parseUrl()
  {
    // Todo: check url exist
    if (isset($_GET['url'])) { // ? url exist
      $url = $_GET['url']; // Todo: assign url
      $url = rtrim($url, '/'); // Todo: trim slash on url end
      $url = filter_var($url, FILTER_SANITIZE_URL); // Todo: filter url from special character
      $url = explode('/', $url); // Todo: split url to array
      return $url;
    }
  }
}
