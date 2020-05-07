<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
      <?php 
   //    error_reporting(0);
			// $servername = "localhost";
			// $username = "root";
			// $password = "";
			// $dbname = "Blood_bank";

			// // Create connection
			// $conn = new mysqli($servername, $username, $password, $dbname);
			// // Check connection
			// if ($conn->connect_error) {
			//     die("Connection failed: " . $conn->connect_error);
			// } 

			// $sql = "SELECT city,area FROM Blood_bank_areas";
			// $result = $conn->query($sql);

			// if ($result->num_rows > 0) {
			//     // output data of each row
			//     while($row = $result->fetch_assoc()) {
			//         $rows[] = $row;
			//     }
			// } else {
			//     echo "0 results";
			// }
			
			// $conn->close();
		?>
		<script type="text/javascript">
  		 //var bb_areas = '<?php //echo json_encode($rows) ?>';
		</script>

    </head>
    <body class="bd front">
    <nav class=" navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="mainNav">
        <li id="home" class="active"><a href="index.php"> Home <span class="sr-only">(current)</span></a></li>
        <li id="blooddonor"><a href="bdonor.php">Find blood Donner</a></li>
        <li id="bloodbank"><a href="bbank.php">Blood Bank Center</a></li>
        <li id="bloodbank"><a href="post.php">Blood Requirement</a></li>
        <li id="bloodbank"><a href="editpost.php">My Post</a></li>
      </ul>
      
      <ul class="nav navbar-right">
        <form class="navbar-form" role="form">
            <!--<div class="form-group">
              <input type="<template></template>xt" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div> -->
            <?php 
            session_start();

            //*************************************************************************************************************************************
            include "mysql_connect.php";
            //include('session.php'); // Includes Login Script

            if(isset($_SESSION['login_user']))
            {

            $login_session = $_SESSION['login_user'];

            $ses_sql=mysql_query("SELECT name from `reg_user` where contact='$login_session'");
            $row = mysql_fetch_assoc($ses_sql);
            $login_user =$row['name'];
            $_SESSION['login_uname'] = $login_user;

            
            


            if(!isset($_SESSION['login_uname'])){
            mysql_close($conn); // Closing Connection
            //header('Location: index.php'); // Redirecting To Home Page
            }
            //$login_uname = $_SESSION['login_uname'];
            

            echo "Hi,".$login_user."";
            ?>
			     <!-- &nbsp;&nbsp; -->

            <button  type="submit" class="btn btn-success"> <a href="logout.php" style="text-decoration: none">Logout</a></button>
            <?php
            }
            else
            {
              ?>
              
              <button type="submit" id="loginbtn" class="btn btn-success"> <a href="login_form.php" style="text-decoration: none">Login</a></button>
              <button type="submit" id="signupbtn" class="btn btn-success"> <a href="register_form.php" style="text-decoration: none">Sign up</a></button>
              <!-- <button type="submit" id="signupbtn" class="btn btn-success"> <a href="user_signup.php" style="text-decoration: none">Sign up</a></button> -->

              <?php
            }

            ?>
<!-- 
             if(isset($_SESSION['login_user'])!='')  
            {  echo "User is".$_SESSION['login_user']; 
              echo '<button  type="submit" class="btn btn-success"> <a href="logout.php">Logout</a></button>'; }
            else{ 
              //echo '<button type="submit" id="loginbtn" class="btn btn-success"> <a href="login_form.php">Login</a></button>';
              ?>
              <button type="submit" id="loginbtn" class="btn btn-success"> <a href="login_form.php">Login</a></button>
              <?php
              //echo '<button type="submit" id="signupbtn" class="btn btn-success"> <a href="signup.php">Sign up</a></button>';} ?>
 -->
                          
          </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
