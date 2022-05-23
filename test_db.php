<?php



include("include/connect.php");

$result = dbQuery("SHOW TABLES")->fetchAll();

var_dump($result);