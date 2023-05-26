<?php

class Database
{

  protected $connection;
  protected $statement;


  public function __construct()
  {
    $dbh = DatabaseConnection::getInstance();
    $this->connection = $dbh->getConnection();
  }

  //Basic query   two ways to do
  //"from where id = :id" -> :id means key for calling it use query($query,[":id" => $id]) 
  //"from where id = ?" -> ? use it in $params
  //                 ^
  //                 |
  //  query($query,[$id])
  public function query($query, $params = [])
  {

    $statement = $this->connection->prepare($query);

    $statement->execute($params);

    return $statement;
  }

  public function customQuery($query, $params = [])
  {

    $this->statement = $this->connection->prepare($query);

    $this->statement->execute($params);

    return $this;
  }

  public function search()
  {
    return $this->statement->fetch();
  }
}
