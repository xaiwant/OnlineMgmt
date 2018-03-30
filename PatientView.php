<?php

include('header.php');
include('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);
$sql7 = "SELECT * from Users where pass1='" . $_SESSION["pass"] ."' AND email='" . $_SESSION["email"] ."' AND user_role='" . $_SESSION["user_role"] ."'";
if (mysqli_num_rows(mysqli_query($conn,$sql7)) >= 1)  {
	$user = mysqli_fetch_row(mysqli_query($conn, $sql7));
?>	
	
	      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
<p class=" text-info"><?php echo date("M d,Y, h:i a"); ?> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $user[2].' '.$user[4]?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>					
                      <tr>
                        <td>ID:</td>
                        <td><?php echo $user[1] ?></td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $user[5] ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $user[6] ?></td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:<?php echo $user[8] ?>"><?php echo $user[8] ?></a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br><?php echo $user[7] ?> (Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>          
                        </span>
                    </div>
            
          </div>
        </div>
	
	
	
<?php	
}
include('footer.php'); 