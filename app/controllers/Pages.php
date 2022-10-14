<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  //index is the default method(runs when on home page)
  public function index()
  {
    $this->view('index');
  }

  public function about()
  {
  }
}
