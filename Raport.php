<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/company-1-121x121.png" type="image/x-icon">
  <meta name="description" content="Company">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Report</title>
 <style> 
 <?php
include "assets/loged/stylehome.css"
 ?>
  <?php
include "assets/loged/Raport.css"
 ?>
 </style>
</head>
<body>

<div class="topnav">
  <a href="home.php" class="active">Koko Company</a>
  <div id="myLinks">
    <a href="news.php">News</a>
    <a href="schedule.php">Schedule</a>
	<a href="contact.php">Contact</a>
	<a href="Raport.php">Report</a>
    <a href="logout.php">Log out</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div>
<section>
	<h1 style="border-radius: 5px; padding: 10px; text-align: center; text-shadow: 3px 3px gray; color: white; font-size: 24px;">Employee End of Day Report</h1>
	<form id="contactform" action="https://formsubmit.io/send/kamil.alderio@gmail.com" method="POST">
	<label for="Username" align="center">Your First Name:</label><br>
	<input
		id="First Name"
		name="First Name"
		type="First Name"
		placeholder="Write your First Name">
<br>
	<label for="Userlastname">Last Name:</label>
	<br>
	<input id="Last Name"
		name="Last Name"
		type="Last Name"
		placeholder="Write your Last Name">
<br>
	<label for="Usertitle">Title:</label>
	<br>
	<input id="Title"
		name="Title"
		type="Title"
		placeholder="Write your Title">
<br>
    <label for="Userdepartment"> Department </label>
	<br>
            <select class="form-dropdown" id="Department" name="Department" style="width:310px" data-component="dropdown">
            <option value="">Please Select</option>
            <option value="Marketing">Marketing</option>
            <option value="Sales">Sales</option>
            <option value="Human Resources">Human Resources</option>
            <option value="Finance">Finance</option>
            <option value="Product">Product</option>
            <option value="Mobile">Mobile</option>
            </select> 
<br>
		<label for="Notice">Daily Report:</label>
		<br>
		<textarea
			id="Notice Report"
			name="Notice Report"
			placeholder="Write your Daily Report">
			</textarea>
			<br>
		<input value="Send" type="submit">
		</button>
	</form>
	</section>
	</div>
	<footer>
		<div class="footer-frame">
			<p class="Copyright">© Copyright 2022 Grupa 2 - All Rights Reserved</p>
		</div>
	</footer>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</body>

  </html>