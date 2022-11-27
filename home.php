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
  <a href="Home.php" class="active">Company Toolbox</a>
  <div id="myLinks">
    <a href="news.php">News</a>
    <a href="schedule.php">Contact</a>
	<a href="blog.php">Blog</a>
	<a href="contact.php">Contact</a>
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
	<h3 class="h3welcome">Ta strona przedstawia jak wygląda menu użytkownika po zalogowaniu</h3>
	<?php echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>"; ?>
</div>

</div>
<h1 class="Obw">Obowiązki</h1>
<img class="imagl" src="assets/images/bs2.png">


	<div class="section">
	<h1>Spotkania</h1>
		<p>Jesteś kierownikiem wydział, więc co za tym idzie jesteś osobą odopowiedzialną za swoją drużynę. Odbywać się będą wiec spotkania, na których
		będziesz zdawał raporty z postępu prac.</p>
		<p>Twoim celem jest prowadzenie dobrych relacji ze swoją kadrą by zachęcać do dalszej pracy oraz prowadzenie raportów.</p>
	</div>
	<div class="section">
	<h1>Przekonanie do współpracy</h1>
		<p>Gdy przychodzi do momentu zapłaty klient jakby schodził na ziemię i zaczyna się zastanawiać,czy to, co oferujesz jest warte jego pieniędzy.
		A tak naprawdę, zastanawia się, czy nie można gdzieś dostać tego taniej! Na tej podstawie wielu sprzedawców doszło do wniosku,
		że liczy się tylko niska cena.
		Ale to nieprawda.</p>
		<p>Twoim celem jest pokazanie klientowi, dlaczego warto zainwestować we współpracę z Tobą, a nie kimś innym.
		Nie musisz wcale źle mówić o konkurencji. Porównaj po prostu to, co dostaje u Ciebie z tym, co dają inni.</p>
	</div>
	
	<img class="imagr" src="assets/images/bs3.png">
	<h1 class="przy">Przywileje</h1>
	<div class="section">
	<h1>Finansowanie wielu rzeczy</h1>
		<p>London is the capital city of England. It is the most populous city in the United Kingdom,
	with a metropolitan area of over 13 million inhabitants.</p>
		<p>Standing on the River Thames, London has been a major settlement for two millennia,
	its history going back to its founding by the Romans, who named it Londinium.</p>
	</div>
	<div class="section">
	<h1>London</h1>
		<p>London is the capital city of England. It is the most populous city in the United Kingdom,
	with a metropolitan area of over 13 million inhabitants.</p>
		<p>Standing on the River Thames, London has been a major settlement for two millennia,
	its history going back to its founding by the Romans, who named it Londinium.</p>
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