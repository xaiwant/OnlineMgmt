<?php
             include('Connection.php');
             $conn = mysqli_connect($dbhost, $username, $password, $dbname);
			 session_start();
			 if ($_SESSION) {
				$query = "SELECT * FROM Users WHERE email='" . $_SESSION['email'] . "'";  
				$user = mysqli_fetch_row(mysqli_query($conn, $query));
			 } else {
					
			 }