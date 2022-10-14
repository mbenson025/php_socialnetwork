<?php
//base controller to load models and views

class Controller
{
  //load model
  public function model($model)
  {
    //require model file
    require_once '../app/models/' . $model . '.php';

    //instantiate the model
    return new $model();
  }

  //load a view
  public function view($view, $data = [])
  {
    if (file_exists('../app/views/' . $view . '.php')) {
      //if it exists then require it
      require_once '../app/views/' . $view . '.php';
    } else {
      //view does NOT exist
      die('View does not exist');
    }
  }
}
