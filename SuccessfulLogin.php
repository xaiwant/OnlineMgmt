<?php
include('header.php');
include('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

$sql4 = "SELECT email from Users where pass1='" . md5($_POST["pass1"]) ."' AND email='" . $_POST["email"] ."'";
	if (mysqli_num_rows(mysqli_query($conn,$sql4)) >= 1)  {

	
	/*insert into session table*/
	
    $query = "INSERT INTO Session (email, pass1, browser_detail, client_ip, logintime)VALUES ('" . $_POST["email"] ."','" . md5($_POST["pass1"]) ."','" . $_SERVER['HTTP_USER_AGENT'] ."','" . $_SERVER['REMOTE_ADDR'] ."','" . time() ."')";
	  if (mysqli_query($conn, $query) === TRUE) {
			//echo "New record created successfully";
		
	  } else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
	  }
	  
	$_SESSION['email'] = $_POST["email"];
	$_SESSION['pass']  = md5($_POST["pass1"]);
	$_SESSION['time']  = time();
	
    if(isset($_SESSION['email']) && !empty($_SESSION['pass'] && !empty($_SESSION['time']))) {
		 echo "Hi, ".$_SESSION['email'];
		 echo '<br>';
         echo "Welcome to our Page";
	} else {		
		header("Location: UserLogin.php");
	}
} else {
		//echo ("Error:" . mysqli_error($conn));
		//echo ("Sessio:" . mysqli_error($conn));
	    //echo ("Users error " . mysqli_error($conn));
		header("Location: UserLogin.php");
    }
	include('footer.php'); 
?>



 