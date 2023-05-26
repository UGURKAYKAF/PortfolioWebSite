<?php

$db = new Database();
$notes = $db->query("select * from tbl_kullanici_egitim")->fetchAll();
var_dump($notes);
echo "<br><br>";

$notes2 = $db->customQuery("select * from tbl_kullanici_egitim")->search();
var_dump($notes2);
