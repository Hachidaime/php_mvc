<?php
class App
{
  public function __construct()
  {
    $url = rtrim($this->parseUrl(), '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);
    var_dump($url);
  }

  public function parseUrl()
  {
    $issetUrl = isset($_GET['url']);

    if ($issetUrl) {
      $url = $_GET['url'];
      return $url;
    }
  }
}
