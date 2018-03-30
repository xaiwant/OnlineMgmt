<?php
		   
		   include('Connection.php');
		   include('header.php');
           $conn = mysqli_connect($dbhost, $username, $password, $dbname);
		   	   
		   if(!empty($_SESSION['email']) && !empty($_SESSION['pass'] && !empty($_SESSION['time']))) {
				if ($_SESSION['user_role'] == 'Patient') {   
		   
					$sql5 = "SELECT * from Users where user_role='doctor'";
					$val= mysqli_query($conn,$sql5) or die(mysql_error());
				
				    echo "<table style='width:100%'><tr><th>DoctorID</th><th>Firstname</th><th>Mobile/EmailID</th><th>Member since</th></tr>";
				    while($row = mysqli_fetch_assoc($val)){  
					   echo "<tr><td><a href='#' data-toggle='modal' data-target='#". $row['patientid'] ."'>". $row['patientid'] ."</a></td><td>". $row['firstname'] ."</td><td>". $row['mob_number'] .' / <a href=mailto:'.$row['email'].">".$row['email']."</a></td><td>". date("d F Y H:i:s", $row['createdtime']) ."</td><td>";
?>					
  <!-- Modal -->
  <div class="modal fade" id="<?php echo $row['patientid']?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $row['firstname'].' : '.$row['department']; ?></h4>
        </div>
        <div class="modal-body">
          <p>
 		     <table class="table table-user-information">
                    <tbody>
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/<?php 
				if (empty($user[23])) {
					echo 'anonymous.jpeg';
				}else {
					echo $user[23];
				}
				 ?>" class="img-circle img-responsive"> </div>					
                      <tr>
                        <td>IDs:</td>
                        <td><?php echo $row['patientid'] ?></td>
                      </tr>
                      <tr>
                        <td>Name:</td>
                        <td> <?php echo $row['lastname'].', '.$row['firstname']; ?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth:</td>
                        <td><?php echo $row['DatOfBirth'] ?></td>
                      </tr>
                      <tr>
                        <td>Gender:</td>
                        <td><?php echo $row['gender'] ?></td>
                      </tr>
                      <tr>
                        <td>Blood:</td>
                        <td><?php echo $row['blood_group'] ?></td>
                      </tr>
                      <tr>
                        <td>Height:</td>
                        <td><?php echo $row['height'].' Cms' ?></td>
                      </tr>					  
                      <tr>
                        <td>Weight:</td>
                        <td><?php echo $row['weight'].' Kg' ?></td>
                      </tr>					  
                      <tr>
                        <td>Address:</td>
                        <td><?php echo $row['country'].' ,' .$row['city']?></td>
                      </tr>			  
                      <tr>
                        <td>Email:</td>
                        <td><a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></td>
                      </tr>
					  <tr>
                        <td>Phone Number:</td>
                        <td>
						   <?php echo $row['landline'] ?> <span class="glyphicon glyphicon-phone-alt"></span><br><br>
						   <?php echo $row['mob_number'] ?> <span class="glyphicon glyphicon-earphone"></span>
                        </td>    
                      </tr>
                     
                    </tbody>
                  </table>
				</p>
           </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<?php               }
				    echo "</td><td></table>";
				} else {
					echo '<b>ACCESS DENIED</b>';
				}
		    } else {		
			   header("Location: UserLogin.php");
		   }		
		 include('footer.php');  
?>
