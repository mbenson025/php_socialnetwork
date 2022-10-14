<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  //index is the default method(homepage)
  public function index()
  {
    $data = ['title' => 'Welcome'];
    $this->view('pages/index', $data);
  }

  public function about()
  {
    $this->view('pages/about');
  }
}
