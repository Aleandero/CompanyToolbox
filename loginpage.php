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
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/css/icons/mobirise2.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
  
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
	
