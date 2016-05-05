<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yolo Home</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="yolo.css" rel="stylesheet" />
    <script type="text/javascript" src="script.js"></script>
</head>
<body onload="slides()">
	<div class="container main-box">
		<nav class="navbar navbar-default">
            <div clas="navbar-header">
                <div class="row">
                <div class="col-md-4">
                <div class="navbar-brand logo">
                    <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" class="img-responsive center-block" alt="Responsive image"></a>
                </div>
                </div>
                <div class="collapse navbar-collapse col-md-8 vcenter" id="first-nav">
			     <ul class="nav nav-pills">
                    <li class="item"><a href="index.php">Home</a></li>
                     <li class="item"><a href="about.php">About</a></li>
                     <li class="item"><a href="contact.php">Contact</a></li>
               
                    <?php
					session_start();
					if(isset($_SESSION['uname'])){
					?>
				<li><a href="logout.php">Logout(Welcome <?php echo $_SESSION['uname']; ?>)</a></li>
					<?php
					}else{
					?>
				
				<li class="item"><a href="registration.php">Register</a></li>
				<li class="item"><a href="login.php">Login</a></li>
				<?php
				}
				?>
                 </ul>
                </div>    
            </div>
            </div>
        </nav>
    <div class="row  center-block">
        <div id="slideshow" class="slide">
            <img src="images/pets1.jpg" class="img-responsive" style="position: absolute;z-index: 1" />
            <img src="images/pets2.jpg" class="img-responsive" style="position: absolute;" />
            <img src="images/pets3.jpg" class="img-responsive" style="position: absolute;" />

       
        </div>
    </div>
    
