<?php
	
	include('header.php');
	include('Connection.php');
    $conn = mysqli_connect($dbhost, $username, $password, $dbname);
    if (!empty($_SESSION)) {	
		$query = "DELETE FROM Session WHERE email = '" . $_SESSION["email"] ."' AND pass1 = '" . $_SESSION["pass"] ."' AND logintime = '" . $_SESSION["time"] ." '";
		mysqli_query($conn, $query);
		unset($_SESSION["email"]);
		unset($_SESSION["pass"]);
		unset($_SESSION["time"]);
     }
	
	if(empty($_SESSION['email']) && empty($_SESSION['pass']) && empty($_SESSION['time'])) {
		echo "You'll be redirect to login page shortly..."; 
		header('Refresh: 1; URL=UserLogin.php');
	}
    		
	session_destroy();
	include('footer.php');
