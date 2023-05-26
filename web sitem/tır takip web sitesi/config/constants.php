<?php
session_start();

//SITEURl i localhost la değiştirin açılmazsa
define("SITEURL", "http://sistemanalizi.test/");
define("LOCALHOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "sistem_analiz");


    // $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_connect_error());
    // $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));
