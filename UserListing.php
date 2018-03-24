<?php
		   
		   include('Connection.php');
		   include('header.php');
           $conn = mysqli_connect($dbhost, $username, $password, $dbname);
		   	   
		   if(isset($_SESSION['email']) && !empty($_SESSION['pass'] && !empty($_SESSION['time']))) {
			
            $sql5 = "SELECT * from Users";
            $val= mysqli_query($conn,$sql5) or die(mysql_error());
            
			echo "<table style='width:100%'><tr><th>PatientID</th><th>Firstname</th><th>Mobile/EmailID</th><th>Member since</th></tr>";
			while($row = mysqli_fetch_assoc($val)){  
                 echo "<tr><td>". $row['patientid'] ."</td><td>". $row['firstname'] ."</td><td>". $row['mob_number'] .' / <a href=mailto:'.$row['email'].">".$row['email']."</a></td><td>". date("d F Y H:i:s", $row['createdtime']) ."</td><td>";
				 
				 //echo '<a href="mailto:' .$row['email'].'" target="_top">Send Mail</a>
				 
				 
		    }
			echo "</td><td></table>";
		  } else {		
			header("Location: UserLogin.php");
		}		
		
           include('footer.php');  
?>