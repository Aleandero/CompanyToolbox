<?php
session_start();
//$host = "localhost"; 
//$user = "root"; 
//$password = ""; 
//$dbname = "phplogin";

$host = "sql7.freesqldatabase.com"; 
$user = "sql7582386"; 
$password = "jZgfl9KSsB"; 
$dbname = "sql7582386";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}