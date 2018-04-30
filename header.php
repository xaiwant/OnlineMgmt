<?php
include ('Session.php');
/*Setting page Title*/
if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/UserRegistration.php')
{
    $title = 'User Registration';
}
else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/UserLogin.php')
{
    $title = 'User Login';
}
else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/ForgotPassword.php')
{
    $title = 'Forgot Password';
}
else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/SuccessfulLogin.php')
{
    $title = 'Home Page';
}
else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/UserListing.php')
{
    $title = 'User Listing';
}
else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/PatientView.php')
{
    $title = 'Patient Detail';
}
else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/SuccessfulRegistration.php')
{
    $title = 'Registration Success';
}
else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/LogOut.php')
{
    $title = 'Logging out';
}
else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/ProfileView.php')
{
    $title = 'Profile view';
}
else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/ProfileEditPage.php')
{
    $title = 'Profile edit';
}

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>
            <?php //echo $title;
 ?>
        </title>
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
           <script src="js/jquery.min.js"></script>
           <script src="js/bootstrap.min.js"></script>
	       <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
           <link rel="stylesheet" type="text/css" href="css/styles.css">
	       <script src="js/Register.js"></script>	
           <script src="js/jQuery.scrollSpeed.js"></script>		   
   </head>
    <body style="background-image:url('images/slider-2.jpeg')">
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a style="color: #ffffff; background-color: #0a829a;" class="navbar-brand" href="index.php">The Hospital</a>
    </div>

    <div class="collapse navbar-collapse" id="navigation">
      <ul class="nav navbar-nav">
	          <li><a href="ContactUs.php">Contact Us</a></li>
	          <?php if (!empty($_SESSION)) { ?>
			  <li><a href="ProfileView.php">Profile</a></li>
			  <?php } ?>
		      <?php if ((!empty($_SESSION)) && ($_SESSION['user_role'] == 'doctor')) { ?>
			  <li><a href="UserListing.php">All Patient</a></li>
			  <li><a href="AppointmentList.php">Appointment</a></li>
	          <?php
} ?>
			  <?php if ((!empty($_SESSION)) && ($_SESSION['user_role'] == 'Patient'))
{ ?>
			  <li><a href="UserListing.php">All Doctors</a></li>
			  <li><a href="RequestAppointment.php">Request Appointment</a></li>
              <?php
}
              if (!empty($_SESSION)) { ?>
              <li><a href="LogOut.php">Logout</a></li>
			   <?php 
} else { ?>
               <li><a href="userRegistration.php">Sign Up</a></li>
			   <li><a href="UserLogin.php">Log In</a></li>
			   <?php } ?>
      </ul>
    </div>
  </div>
</nav>
        <div class="container"  style="padding-top: 60px; min-height: 700px;">
            <div class="row align-items-center justify-content-center">
