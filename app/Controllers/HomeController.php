<?php

class HomeController extends Controller{

  public function __construct(){

  }

  public function index(){
    // return $this->view('home');
    $user = $this->model('User');
    var_dump($user);
  }

}

?>
