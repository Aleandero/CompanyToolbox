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
  <title>Home</title>
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
	<a href="Raport.php">Report</a>
    <a href="logout.php">Log out</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="welcome-wrap">
<img class="welcome-bg" src="assets/images/bs1.png">
<div class="welcome-content">
<h1 class="h1welcome">
	<?php

	$Name = $_SESSION['uname'];
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "Welcome $Name";
	?></h1>
	<h3 class="h3welcome"><?php if($Name=="admin") echo "Head of the human resources management department"?><?php if($Name=="kamil") echo "Marketing Manager"?></h3>
	<?php echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>"; ?>
</div>

</div>
<h1 class="Obw">Responsibilities and Privileges</h1>
<img class="imagl" src="assets/images/bs2.png">


	<div class="section">
	<h1><?php if($Name=="admin") echo "Meetings" ?><?php if($Name=="kamil") echo "Organizing a sales program" ?></h1>
		<p><?php if($Name=="admin") echo "You are the head of the department, so you are responsible for your team. There will be meetings where you will report on the progress of work." ?>
		<?php if($Name=="kamil") echo "The head of the marketing and sales department co-creates and develops the product sales strategy. He participates in the creation of pricing programs and strategies and manages sales. To this end, it plans and organizes sales programs based on sales results and market assessment." ?></p>
		<p><?php if($Name=="admin") echo "Your goal is to maintain a good relationship with your staff to encourage further work and to keep reports." ?>
		<?php if($Name=="kamil") echo "In addition, he establishes and maintains contacts with strategic clients, setting the terms of cooperation together with them, and then watches over their proper course." ?></p>
	</div>
	<div class="section">
	<h1><?php if($Name=="admin") echo "Persuasion to cooperate" ?><?php if($Name=="kamil") echo "Launching new products" ?></h1>
		<p><?php if($Name=="admin") echo "When it comes to the moment of payment, the customer seems to come down to earth and starts to wonder if what you offer is worth his money. In fact, he wonders if you can get it cheaper somewhere! On this basis, many sellers came to the conclusion that only the low price matters. But that's not true." ?></p>
		<p><?php if($Name=="admin") echo "Your goal is to show the client why it is worth investing in cooperation with you and not someone else. You don't have to talk badly about the competition at all. Just compare what you get with what others give." ?>
		<?php if($Name=="kamil") echo "His tasks also include work related to introducing new products to the market and researching the level of product acceptance by consumers. In order to increase product sales, it is important to oversee a pre-planned and organized sales promotion campaign." ?></p>
	</div>
	<img class="imagr" src="assets/images/bs3.png">

	<div class="section">
	<h1><?php if(($Name=="admin")or($Name=="kamil")) echo "Financing many things" ?></h1>
		<p><?php if(($Name=="admin")or($Name=="kamil")) echo "As our employee, you will receive gym passes and even financing extramural studies or a swimming pool. Additionally, we finance private medical care." ?></p>
		<p><?php if(($Name=="admin")or($Name=="kamil")) echo "A healthy mind resides in a healthy body, which is why, as managers, we encourage you to take advantage of all opportunities to become better." ?></p>
	</div>
	<div class="section">
	<h1><?php if(($Name=="admin")or($Name=="kamil")) echo "Ability to work remotely" ?></h1>
		<p><?php if(($Name=="admin")or($Name=="kamil")) echo "As our employee, you have the option to work remotely. However, this is a privilege that we ask you to use only when you are unable to appear at the company." ?> </p>
		<p><?php if(($Name=="admin")or($Name=="kamil")) echo "As a manager of the human resources department, it is important to communicate with colleagues to ensure appropriate working conditions." ?></p>
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