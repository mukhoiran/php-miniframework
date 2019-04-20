<?php

class HomeController extends Controller{

  public function __construct(){

  }

  public function index(){
    $user = $this->model('User');
    return $this->view('home', ['name' => $user->name, 'age' => $user->age]);
    // var_dump($user);
  }

  public function getUsers(){
    $users = $this->model('User')->index();
    return $this->view('users', ['users' => $users]);
  }

}

?>
