<?php
class Pages
{
  public function __construct()
  {
  }

  //added public index function to fix homepage
  public function index()
  {
  }

  public function about($id)
  {
    echo $id;
  }
}
