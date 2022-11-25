<!DOCTYPE html>
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM login WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/company-1-121x121.png" type="image/x-icon">
  <meta name="description" content="Company">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/css/icons/mobirise2.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
  
  <style>
    form {border: 3px solid #f1f1f1;}

    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        
}
</style>
  
  
</head>
<body>
  
  <section class="menu cid-s48OLK6784">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="assets/images/company-1-121x121.png" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index.php">Company Toolbox</a></span>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="index.php"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a></li>
            <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="page1.php"><span class="mobi-mbri mobi-mbri-add-submenu mbr-iconfont mbr-iconfont-btn"></span>Schedule</a></li>
            <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="page2.php"><span class="mobi-mbri mobi-mbri-italic mbr-iconfont mbr-iconfont-btn"></span>New Information</a></li>
            <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="page3.php"><span class="mbri-mobile mbr-iconfont mbr-iconfont-btn"></span>Contact</a></li>
            <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="loginpage.php"><span class="mbri-mobile mbr-iconfont mbr-iconfont-btn"></span>Log in</a></li></ul>
               
                
            </div>
        </div>
    </nav>

</section>
<section class="form5 cid-tn4X0jmbyb mbr-Fullscreen " >
</section>
<section class="form5 cid-tn4X0jmbyb mbr-Fullscreen " >

    
        <form name="f1" onsubmit = "return validation()" method = "POST" class="align-center">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" required />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" required />  
            </p>  
            <p>     
                <button type="submit" name="submit" id="sub">Login</button> 
            </p>  
        </form>  

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

