<?php
include('Session.php');
	/*Setting page Title*/
	if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/UserRegistration.php'){
		$title = 'User Registration';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/UserLogin.php') {
		$title = 'User Login';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/ForgotPassword.php') {
		$title = 'Forgot Password';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/SuccessfulLogin.php') {
		$title = 'Home Page';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/DoctorUserListing.php') {
		$title = 'Doctor Listing';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/PatientListing.php') {
		$title = 'Patient Listing';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/PatientView.php') {
		$title = 'Patient Detail';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/SuccessfulRegistration.php') {
		$title = 'Registration Success';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/LogOut.php') {
		$title = 'Logging out';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/ProfileView.php') {
		$title = 'Profile view';
	}else if ($_SERVER['REQUEST_URI'] == '/OnlineMgmt/ProfileEditPage.php') {
		$title = 'Profile edit';
	}

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>
            <?php echo $title; ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <script src="js/Register.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a href="SuccessfulLogin.php"><img src="images/logo.png" alt="Dev Ops"></a>
                <br>
                <div class="user-area">
                    <?php 

			if (!empty($_SESSION)) { echo 'Hi, ' .$user[2]; } else {}			
			?>
                </div>
                <br>
                <div class="topnav" id="myTopnav">
                    <?php if (!empty($_SESSION)) {  ?>
                        <a href="ProfileView.php">Profile</a>
                        <?php  if ($_SESSION['user_role'] == 'doctor') {
			         ?> <a href="PatientListing.php">Patient</a>
                            <?php }else { ?>
                                <a href="DoctorUserListing.php">Doctors</a>
                                <?php } ?>
                                    <a href="LogOut.php">LogOut</a>
                                    <?php } else { ?>
                                        <a href="UserLogin.php">LogIn</a>
                                        <a href="UserRegistration.php">Registration</a>
                                        <?php } ?>
                                            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="menu_bootstrap()">&#9776;</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">