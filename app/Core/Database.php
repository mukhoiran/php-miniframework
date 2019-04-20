<?php

class Database{

  private static $_instance = null;
  private $mysqli;

  public function __construct(){
    $this->mysqli = new mysqli('localhost','root', '', 'php-miniframework') or die('Connection DB error!');
  }

  public static function getInstance(){
    if(!isset(self::$_instance)){
      self::$_instance = new Database();
    }

    return self::$_instance;
  }

  public function index($table){
    $reply = [];
    $sql = "SELECT * FROM $table";
    $result = $this->mysqli->query($sql);
    while($row = $result->fetch_assoc()){
      $reply[] = $row;
    }

    return $reply;
  }
}

?>
