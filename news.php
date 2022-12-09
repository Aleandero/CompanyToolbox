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
  <link rel="stylesheet" href="assets/css/news.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">

  <title>News</title>
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
<section class="timeline1 news">
    

    
    
    <div class="timelines-container container">
        <div class="mbr-section-head">
            <h3 class="align-center mb-0 display-2">
                <strong>News</strong></h3>
            
        </div>
        <div class="row timeline-element mb-2 mt-4">
            <div class="timeline-date col-md-6">
                <div class="timeline-date-wrapper">
                    <p class="display-5">
                        <strong>26 April 2023</strong>
                    </p>
                </div>
            </div>
            <span class="iconBackground"></span>
            <div class="col-md-6">
                <div class="timeline-text-wrapper">
                    <h4 class="mb-4 display-5"><strong>New Hall Designing Ended </strong></h4>
                    
                    <p class="display-7">
                        The design of the new hall has been completed and we have commissioned a construction company to handle the construction. Expect information about possible transfers or the opening of recruitment at the beginning of next year.
					</p>
                </div>
            </div>
        </div>
        <div class="row timeline-element mb-2">
            <div class="col-md-6">
                <div class="timeline-text-wrapper">
                    <h4 class="mb-4 display-5"><strong>Implementation of a new production</strong></h4>
                    
                    <p class="display-7">
                        From the beginning of next week, we are changing production. I sent the most important information to all employees working on assembly works.</p>
                </div>
            </div>
            <span class="iconBackground"></span>
            <div class="timeline-date  col-md-6">
                <div class="timeline-date-wrapper">
                    <p class="display-5">
                        <strong>18 April 2023</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="row timeline-element mb-2">
            <div class="timeline-date col-md-6">
                <div class="timeline-date-wrapper">
                    <p class="display-5">
                        <strong>16 April 2023</strong>
                    </p>
                </div>
            </div>
            <span class="iconBackground"></span>
            <div class="col-md-6">
                <div class="timeline-text-wrapper">
                    <h4 class="mb-4 display-5">
                        <strong>New Hall Designing </strong></h4>
                    
                    <p class="display-7">
                        Work has begun on designing a new Assembly Hall, which is to be built in 2024.
                    </p>
                </div>
            </div>
        </div>
		<div class="row timeline-element mb-2">
            <div class="col-md-6">
                <div class="timeline-text-wrapper">
                    <h4 class="mb-4 display-5"><strong>Training for new employees</strong></h4>
                    
                    <p class="display-7">
                        We informs that on April 15, new employees from the group dealing with human resources management are undergoing mandatory training. The topic of the training will be "Effective building of relationships in your teams".
					</p>
                </div>
            </div>
            <span class="iconBackground"></span>
            <div class="timeline-date  col-md-6">
                <div class="timeline-date-wrapper">
                    <p class="display-5">
                        <strong>11 April 2023</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="row timeline-element mb-2">
            <div class="timeline-date col-md-6">
                <div class="timeline-date-wrapper">
                    <p class="display-5">
                        <strong>8 April 2023</strong>
                    </p>
                </div>
            </div>
            <span class="iconBackground"></span>
            <div class="col-md-6">
                <div class="timeline-text-wrapper">
                    <h4 class="mb-4 display-5">
                        <strong>First Day with new company website</strong></h4>
                    
                    <p class="display-7">
                        From now on, all important information and changes to employee schedules will be posted on this page. Each of the employees should adapt and use the new platform. If you have any questions, you can write me a message in the Contact tab. Finally, I remind you to send reports at the end of the working day.
					</p>
                </div>
            </div>
        </div>
		
        
    </div>
</section>
	<footer>
		<div class="footer-frame" style="padding: 1rem">
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