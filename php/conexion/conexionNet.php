<?php

$server = 'localhost';
$username = 'root';
$pass = "JAAT2209";
$password = '';
$database = 'cobatab';

try {
  $link = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>