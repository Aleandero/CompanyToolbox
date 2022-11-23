<!DOCTYPE html>
<html  >
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

    

<form action="/loginpage.php" method="post" class="align-center">

  <div class="container align-center">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit" id="sub">Login</button>
  </div>

  </div>
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

<?php
    mysql_connect("sql7.freesqldatabase.com","sql7580097","RWuYRdbM7h");
    mysql_selectdb("sql7580097");


    if (isset($_POST['submit'])){
        $uname=$_POST['username'];
        $psw=$_POST['password'];
        $sql=mysql_query("select password from sql7580097 where username='uname'");
        if ($row=mysql_fetch_array($sql)){

        if ($psw==$row['password']){
            header("location:home.php");
            exit();
        }
        else
            echo "Invalid Password";

    }
    else
        echo "Invalid Username";
}
?>
