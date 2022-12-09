<?php
session_start();
//$host = "localhost"; 
//$user = "root"; 
//$password = ""; 
//$dbname = "phplogin";

$host = "sql7.freesqldatabase.com"; 
$user = "sql7583728"; 
$password = "7r25LemLE5"; 
$dbname = "sql7583728";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}