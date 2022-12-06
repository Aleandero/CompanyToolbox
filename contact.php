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
  <title>Contact</title>
 <style> 
 <?php
include "assets/loged/stylehome.css"
 ?>
 </style>
</head>
<body>

<div class="topnav">
  <a href="home.php" class="active">Koko Company</a>
  <div id="myLinks">
    <a href="news.php">News</a>
    <a href=<?php if($_SESSION['uname']=="admin"){ echo 'schedule.php';} else { echo 'schedule1.php';}?>>Schedule</a>
	<a href="contact.php">Contact</a>
	<a href="Raport.php">Raport</a>
    <a href="logout.php">Log out</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
	<form id="contactform" action="https://formsubmit.io/send/kamil.alderio@gmail.com" method="POST">
	<label for="User">Your user Name*</label>
	<input
		id="Employee"
		name="Employee"
		type="Employee"
		placeholder="Write your Name">
		
		<label for="Notice">Your message*</label>
		<textarea
			id="Notice"
			name="Notice"
			placeholder= "Write your message">
			</textarea>
		<input value="Send" type="submit">
		</button>
	</form>
	
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