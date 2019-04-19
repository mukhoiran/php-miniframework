<?php

class HomeController extends Controller{

  public function __construct(){

  }

  public function index(){
    echo "default method";
  }

  public function testing($name){
    echo $name;
  }
}

?>
