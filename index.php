<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Hospital - Smiling millions face</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/the-big-picture.css" rel="stylesheet">
	
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

  </head>

  <body>
    <!-- Page Content -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <h1 class="mt-5"><a href="index.php">The Hospital</a></h1>
            <p style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">The Hospital is one of the largest healthcare providers in eastern India and has become the youngest hospital to get the prestigious NABH (National Accreditation Board of Hospital & Healthcare Providers) accreditation. We bring you the finest ambience and services for inpatient and outpatient treatment, with special emphasis on quality care, reasonable price, management expertise and sophisticated medical devices.</p>

           <p class= "hidden-xs" style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">Medica chain of hospitals started its journey with Medica North Bengal Clinic, a 150-bed multispecialty hospital in Siliguri. The 400-bed Medica Superspecialty Hospital in Kolkata, one of the largest and best equipped in eastern India, was started in 2010, followed by Kantilal Gandhi Memorial Hospital in Jamshedpur and Bhagwan Mahavir Medica Superspecialty Hospital in Ranchi. </p>
<?php
include ('Session.php');
if (empty($_SESSION['email']))
{ ?>
		   	<a href="userRegistration.php" class="btn btn-primary btn-lg" role="button">Sign Up</a>
			<a href="UserLogin.php" class="btn btn-primary btn-lg" role="button">Log In</a>
<?php
}
else
{ ?>
  <div class="dropdown">
    <button class="btn btn-lg btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Active Menu
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="ProfileView.php">Profile</a></li>
<?php if ($_SESSION['user_role'] == 'doctor')
    { ?>
      <li><a href="UserListing.php">All Patient</a></li>
	  <li><a href="AppointmentList.php">Appointment</a></li>
<?php
    }
    else
    { ?>
      <li><a href="UserListing.php">All Doctors</a></li>
	  <li><a href="RequestAppointment.php">Request Appointment</a></li>
<?php
    } ?>
      <li><a href="LogOut.php">Logout</a></li>
    </ul>
  </div>
<?php
} ?>

          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
