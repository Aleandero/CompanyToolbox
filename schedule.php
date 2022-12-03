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
    <a href="schedule.php">Schedule</a>
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
    <tr>
	  <th>czas/dzień</th>
	</tr>
	<br>
	<tr>
      <th>08:00</th>
      <td colspan="4" rowspan="2" class="stage-saturn">Welcome</td>
    </tr>
    <tr>
      <th>08:30</th>
    </tr>
    <tr>
      <th>09:00</th>
      <td colspan="4" class="stage-earth">. <span>.</span></td>
    </tr>
    <tr>
      <th>09:30</th>
      <td colspan="4" class="stage-earth">. <span>.</span></td>
    </tr>
    <tr>
      <th>10:00</th>
      <td colspan="4" class="stage-earth">. <span>.</span></td>
    </tr>
    <tr>
      <th>10:30</th>
      <td colspan="4" class="stage-earth">. <span>.</span></td>
    </tr>
    <tr>
      <th>11:00</th>
      <td rowspan="5" style="backgroud-color: blue;">. <span>.</span></td>
      <td rowspan="5" >. <span>.</span></td>
      <td rowspan="5" >. <span>.</span></td>
      <td rowspan="2" >.</td>
    </tr>
    <tr>
      <th>11:30</th>
    </tr>
    <tr>
      <th>12:00</th>
      <td rowspan="3" class="stage-saturn"></td>
    </tr>
    <tr>
      <th>12:30</th>
    </tr>
    <tr>
      <th>13:00</th>
    </tr>
    <tr>
      <th>13:30</th>
      <td colspan="4" rowspan="2"> ,,,,,,,,,,</td>
    </tr>
    <tr>
      <th>14:00</th>
    </tr>
    <tr>
      <th>14:30</th>
      <td colspan="4" rowspan="8" >mmmmmmmmmmmmmmmm</td>
    </tr>
    <tr>
      <th>15:00</th>
    </tr>
    <tr>
      <th>15:30</th>
    </tr>
    <tr>
      <th>16:00</th>
    </tr>
    <tr>
      <th>16:30</th>
    </tr>
    <tr>
      <th>17:00</th>
    </tr>
    <tr>
      <th>17:30</th>
    </tr>
    <tr>
      <th>18:00</th>
    </tr>
    <tr>
      <th>18:30</th>
      <td colspan="4" >gfhfh <span>fghf</span></td>
    </tr>
    <tr>
      <th>19:00</th>
      <td colspan="2" rowspan="2" >gfhf <span>fgh</span></td>
      <td colspan="2" rowspan="2" >fghf <span>fghf</span></td>
    </tr>
    <tr>
      <th>19:30</th>
    </tr>
    <tr>
      <th>20:00</th>
      <td colspan="2" >fghf <span>fgh</span></td>
      <td >fgg <span>fgh</span></td>
      <td >hfghf <span>hgf</span></td>
    </tr>
    <tr>
      <th>20:30</th>
      <td colspan="4" rowspan="2">...........</td>
    </tr>
    <tr>
      <th>21:00</th>
    </tr>
  </body>
</table>
	<br><br><br><br><br><br><br><br><br><br>
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