<?php
include('header.php');
include('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

$sql4 = "SELECT email from Users where pass1='" . md5($_POST["pass1"]) ."' AND email='" . $_POST["email"] ."' AND user_role='" . $_POST["user_role"] ."'";
	if (mysqli_num_rows(mysqli_query($conn,$sql4)) >= 1)  {

		$_SESSION['email'] = $_POST["email"];
	    $_SESSION['pass']  = md5($_POST["pass1"]);
		$_SESSION['user_role']  = $_POST["user_role"];
	    $_SESSION['time']  = time();
	
		$sql6 = "SELECT * from Session where email='" . $_SESSION['email'] . "' AND pass1='" . md5($_POST["pass1"]) . "'";	
		if (mysqli_num_rows(mysqli_query($conn, $sql6)) == 0) {

			/*insert into session table*/
			$query = "INSERT INTO Session (email, pass1, browser_detail, client_ip, logintime)VALUES ('" . $_POST["email"] ."','" . md5($_POST["pass1"]) ."','" . $_SERVER['HTTP_USER_AGENT'] ."','" . $_SERVER['REMOTE_ADDR'] ."','" . $_SESSION['time'] ."')";
			mysqli_query($conn, $query);
		} else {
			
            $sql7 = "UPDATE Session SET logintime='" . time() . "' ,
                               			browser_detail='" . $_SERVER['HTTP_USER_AGENT'] . "',
										client_ip='" . $_SERVER['REMOTE_ADDR'] . "' 
										WHERE email='" . $_SESSION['email'] . "' AND 
										pass1='" . $_SESSION['pass'] . "'";
																		
		    mysqli_query($conn, $sql7);
	    }
		 header("Location: UserLogin.php");		 
    } else {
		//echo ("Error:" . mysqli_error($conn));
		header("Location: UserLogin.php");
    }
	include('footer.php'); 
?>



 