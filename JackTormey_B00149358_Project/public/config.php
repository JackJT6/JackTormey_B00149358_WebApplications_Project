<?php

$host = "localhost";
$username = "root";
$password = "12345";
$dbname = "JerseyStore"; 
$dsn = "mysql:host=$host;dbname=$dbname"; 
$options = array(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
 );