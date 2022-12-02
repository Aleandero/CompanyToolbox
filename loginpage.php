<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/company-1-121x121.png" type="image/x-icon">
  <meta name="description" content="Company">
  
  
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/icons/mobirise2.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/loged/stylehome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <style>

/* Login */
#div_login{
    border: 1px solid gray;
    border-radius: 3px;
    width: 470px;
    height: 270px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto;
}

#div_login h1{
    margin-top: 0px;
    font-weight: normal;
    padding: 10px;
    background-color: cornflowerblue;
    color: white;
    font-family: sans-serif;
}

#div_login div{
    clear: both;
    margin-top: 10px;
    padding: 5px;
}

#div_login .textbox{
    width: 96%;
    padding: 7px;
}

#div_login input[type=submit]{
    padding: 7px;
    width: 100px;
    background-color: lightseagreen;
    border: 0px;
    color: white;
}
</style>
  
  
</head>
<body>
  
   <div class="topnav">
  <a href="home.php" class="active">Company Toolbox</a>
  <div id="myLinks">
    <a href="Index.php">Main Page</a>
    <a href="page1.php">Schedule</a>
	<a href="page2.php">News</a>
	<a href="page3.php">Contact</a>
    <a href="loginpage.php">Log in</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<section class="form5 cid-tn4X0jmbyb mbr-Fullscreen " >
</section>
<section class="form5 cid-tn4X0jmbyb mbr-Fullscreen " >

    
<div class="container align-center">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div> 
</section>
<section class="form5 cid-tn4X0jmbyb mbr-Fullscreen " >
</section>

<section class="footer7 cid-tn4Fk1NEQy">
    
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="display-7">
                    © Copyright 2022 Grupa 2 - All Rights Reserved
                </p>
            </div>
        </div>
    </div>

  
</body>
</html>
	
