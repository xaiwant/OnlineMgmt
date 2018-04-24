<?php
		   
		   include('Connection.php');
		   include('header.php');
           $conn = mysqli_connect($dbhost, $username, $password, $dbname);
		   	   
		   if(!empty($_SESSION['email']) && !empty($_SESSION['pass'] && !empty($_SESSION['time']))) {
				if ($_SESSION['user_role'] == 'doctor') {
					$sql5 = "SELECT * from appointment ORDER BY preqtime DESC";
					$val= mysqli_query($conn,$sql5) or die(mysql_error());
					
					echo "<div class='table-responsive'><table style='width:100%'><tr><th>Patient/PatientID(If Available)</th><th>Mobile/EmailID</th><th>Department</th><th>Appointment Date</th><th>Requested Date</th></tr>";
					while($row = mysqli_fetch_assoc($val)){  
						 echo "<tr><td>". $row['pname'].' / ' .$row['patientid'] ."</td><td>". $row['pmob_number'] .' / <a href=mailto:'.$row['pemail'].">".$row['pemail']."</a></td><td>". $row['pdepartment'] ."</td><td>". $row['PDatOfAppt'] ."</td><td>". date("d F Y g:i:s A", $row['preqtime']) ."</td><td>";						 
				    }
					echo "</table></div>";
				} else {
					echo '<b>ACCESS DENIED</b>';
				}
			
		    } else {		
				header("Location: UserLogin.php");
			}		
			
           include('footer.php');  
?>