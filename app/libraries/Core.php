<?php

//working with urls. loads core controller
//URL FORMAT - /controller/method/params

class Core
{
  protected $current_controller = 'Pages';
  protected $current_method = 'index';
  protected $params = [];

  public function getURL()
  {
    echo $_GET['url'];
  }
}
