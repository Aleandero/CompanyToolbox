<?php
session_start();
//$host = "localhost"; 
//$user = "root"; 
//$password = ""; 
//$dbname = "phplogin";

$host = "sql7.freesqldatabase.com"; 
$user = "sql7580097"; 
$password = "RWuYRdbM7h"; 
$dbname = "sql7580097";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}