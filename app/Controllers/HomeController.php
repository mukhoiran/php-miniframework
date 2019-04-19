<?php

class HomeController extends Controller{

  public function __construct(){

  }

  public function index(){
    $user = $this->model('User');
    return $this->view('home', ['name' => $user->name, 'age' => $user->age]);
    // var_dump($user);
  }

}

?>
