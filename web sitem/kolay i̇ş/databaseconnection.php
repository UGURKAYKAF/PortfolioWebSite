<?php

final class DatabaseConnection{
  private static $instance = null;
  private static $connection;

  public static function getInstance(){
    if(is_null(self::$instance)){
      self::$instance = new DatabaseConnection();
    }
    return self::$instance;
  }

  private function __construct(){}

  private function __clone(){}

  public static function connect($user = "root",$password = ""){
    $databaseSourceName = "mysql:dbname=gunluk_kazanc;host=localhost";
    self::$connection = new PDO($databaseSourceName, $user, $password,[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
  }
  
  public static function getConnection(){
    return self::$connection;
  }
}