<?php

//working with urls. loads core controller
//URL FORMAT - /controller/method/params

class Core
{
  protected $current_controller = 'Pages';
  protected $current_method = 'index';
  protected $params = [];

  public function __construct()
  {
    // print_r($this->getUrl());

    $url = $this->getUrl();

    //look in controllers for first value(index)
    if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      //if exists- set as controller
      $this->currentController = ucwords($url[0]);
    }
  }

  public function getURL()
  {
    // echo $_GET['url'];
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
}
