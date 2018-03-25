<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>User Login Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/styles.css">
	  <script src="js/Register.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
         <div class="container">
            <a href="SuccessfulLogin.php"><img src="logo.png" alt="Dev Ops"></a>
			<br>
			<div class="user-area"> 
			<?php 
			include('Session.php');
			if ($_SESSION) { echo 'Hi, ' .$user[2]; } else {}			
			?></div>
            <br>
            <ul class="horizontal_menu">
               <li class="active"><a href="UserListing.php">Users</a></li>
               <li class="active"><a href="LogOut.php">LogOut</a></li>
			   <li class="user"><a href="UserRegistration.php">Registration</a></li>
               <li class="active"><a href="UserLogin.php">LogIn</a></li>
            </ul>
         </div>
      </nav>
      <div class="container">
        <div class="row">