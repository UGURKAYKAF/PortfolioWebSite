<?php

if (!isset($_SESSION)) {
  session_start();
}

include "functions.php";
/*
Databse bağlantısı 
require_once "DatabaseConnection.php";
DatabaseConnection::connect();

require_once "Database.php";
*/



require "router.php";
