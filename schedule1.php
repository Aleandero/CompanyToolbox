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

if($_SESSION['uname']=="kamil"){;}
else {
	session_destroy();
header('Location: home.php');}

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
  <title>Schedule</title>
 <style> 
 <?php
include "assets/loged/stylehome.css"
 ?>
  <?php
include "assets/loged/schedule.css"
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
<table>
  <body>
    <tr class="ff">
	  <th>Day:</th>
	  
	  <th colspan="2" >Monday</th>
	  <th colspan="2" >Tuesday</th>
	  <th colspan="2" >Wednesday</th>
	  <th colspan="2" >Thursday</th>
	  <th colspan="2" >Friday</th>
	  <th colspan="2" >Saturday</th>
	  <th colspan="2" >Sunday</th>
	</tr>
	<tr>
	  <th class="ff">Time/Week</th>
	  <th class="odd" colspan="1" >Odd</th>
	  <th class="even" colspan="1" >Even</th>
	  <th class="odd" colspan="1" >Odd</th>
	  <th class="even" colspan="1" >Even</th>
	  <th class="odd" colspan="1" >Odd</th>
	  <th class="even" colspan="1" >Even</th>
	  <th class="odd" colspan="1" >Odd</th>
	  <th class="even" colspan="1" >Even</th>
	  <th class="odd" colspan="1" >Odd</th>
	  <th class="even" colspan="1" >Even</th>
	  <th class="odd" colspan="1" >Odd</th>
	  <th class="even" colspan="1" >Even</th>
	  <th class="odd" colspan="1" >Odd</th>
	  <th class="even" colspan="1" >Even</th>
	</tr>
	<br>
	<tr >
      <th class="odd">08:00</th>
	  <td colspan="1" rowspan="10" ></td>
      <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="10" ></td>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="10" ></td>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="10" ></td>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="10" ></td>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="10" ></td>
	  <td colspan="1" rowspan="28" class="plan free" >Free</td>
	  <td colspan="2" rowspan="28" class="plan free" >Free</td>
	  
    </tr>
    <tr >
      <th class="even">08:30</th>
    </tr>
    <tr>
      <th class="odd">09:00</th>
    </tr>
    <tr >
      <th class="even">09:30</th>

    </tr>
    <tr>
      <th class="odd">10:00</th>

    </tr>
    <tr>
      <th class="even">10:30</th>
    </tr>
    <tr>
      <th class="odd">11:00</th>
    </tr>
    <tr>
      <th class="even">11:30</th>
    </tr>
    <tr>
      <th class="odd">12:00</th>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
    </tr>
    <tr>
      <th class="even">12:30</th>
    </tr>
    <tr>
      <th class="odd">13:00</th>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="6" class="plan work" >Work</td>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="6" class="plan work" >Work</td>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="6" class="plan work" >Work</td>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="6" class="plan work" >Work</td>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
	  <td colspan="1" rowspan="6" class="plan work" >Work</td>
	  <td colspan="1" rowspan="8" class="plan work" >Work</td>
    </tr>
    <tr>
      <th class="even">13:30</th>
    </tr>
    <tr>
      <th class="odd">14:00</th>
    </tr>
    <tr>
      <th class="even">14:30</th>
    </tr>
    <tr>
      <th class="odd">15:00</th>
    </tr>
    <tr>
      <th class="even">15:30</th>
    </tr>
    <tr>
      <th class="odd">16:00</th>
	  <td colspan="1" rowspan="11" ></td>
	  <td colspan="1" rowspan="11" ></td>
	  <td colspan="1" rowspan="11" ></td>
	  <td colspan="1" rowspan="11" ></td>
	  <td colspan="1" rowspan="11" ></td>
		  
    </tr>
    <tr>
      <th class="even">16:30</th>
    </tr>
    <tr>
      <th class="odd">17:00</th>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
	  <td colspan="1" rowspan="2" class="plan break" >Break</td>
    </tr>
    <tr>
      <th class="even">17:30</th>
    </tr>
    <tr>
      <th class="odd">18:00</th>
	  <td colspan="1" rowspan="7" class="plan work" >Work</td>
	  <td colspan="1" rowspan="7" class="plan work" >Work</td>
	  <td colspan="1" rowspan="7" class="plan work" >Work</td>
	  <td colspan="1" rowspan="7" class="plan work" >Work</td>
	  <td colspan="1" rowspan="7" class="plan work" >Work</td>
	  <td colspan="1" rowspan="7" class="plan work" >Work</td>
    </tr>
    <tr>
      <th class="even">18:30</th>
    </tr>
    <tr>
      <th class="odd">19:00</th>
    </tr>
    <tr>
      <th class="even">19:30</th>
    </tr>
    <tr>
      <th class="odd">20:00</th>
    </tr>
    <tr>
      <th class="even">20:30</th>
    </tr>
    <tr>
      <th class="odd">21:00</th>
    </tr>
  </body>
</table>
	<br><br><br><br>
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