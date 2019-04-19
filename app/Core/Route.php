<?php

class Route{

  protected $controller = 'HomeController';
  protected $method = 'index';
  protected $param = [];

  public function __construct(){
    if(isset($_GET['url'])){
      $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
    }

    $url[0] = $url[0].'Controller';

    // check file controller
    if( file_exists('../app/Controllers/'.$url[0].'.php') ){
      $this->controller = $url[0];
    }

    require_once '../app/Controllers/'.$this->controller.'.php';
    $this->controller = new $this->controller;

    // check method controller
    if(isset($url[1])){
      if(method_exists($this->controller, $url[1])){
        $this->method = $url[1];
      }
    }

    unset($url[0]);
    unset($url[1]);
    $this->param = $url;

    call_user_func_array([$this->controller, $this->method], $this->param);
  }
}

?>
