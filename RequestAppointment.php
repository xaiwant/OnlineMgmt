<?php
include ('header.php');
//include ('Connection.php');
//$conn = mysqli_connect($dbhost, $username, $password, $dbname);
if ((!empty($_SESSION)) && ($_SESSION['user_role'] == 'Patient'))
{
?>
    <form id="register" action="" method="post">
        <div class="row">
            <div id="registrationform_id">             
                <fieldset>
                    <legend><span class="glyphicon glyphicon-user"></span> Patient Information:</legend>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Patient Full Name *</label>
                        <input name="pfirstname" id="pfirstname" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Email ID *</label>
                        <input name="pemail" id="pemail" class="form-control" type="email" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Contact No. *</label>
                        <input name="pmob_number" id="pmob_number" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Date of Appointment *</label>
                        <input name="PDatOfAppt" id="PDatOfAppt" class="form-control" type="date" required />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Appointment Required For (Department) *</label>
                        <select name="p_appoint_dpt" class="form-control" id="p_appoint_dpt">
                                 <option value="">- None -</option>
                                 <option value="cardiac-surgery">Cardiac Surgery</option>
                                 <option value="cardiology">Cardiology</option>
                                 <option value="dermatology">Dermatology</option>
                                 <option value="dietetics">Dietetics</option>
                                 <option value="e-n-t">E.N.T.</option>
                                 <option value="gastroenterology-hepatology">Gastroenterology &amp; Hepatology</option>                                
                                 <option value="internal-medicine">Internal Medicine</option>
                                 <option value="maxillofacial-surgery">Maxillofacial Surgery</option>
                                 <option value="nephrology">Nephrology</option>
                                 <option value="neuro-surgery">Neuro Surgery</option>
                                 <option value="obstetrics-gynaecology">Obstetrics &amp; Gynaecology</option>
                                 <option value="ophthalmology">Ophthalmology</option>
                                 <option value="institute-of-orthopaedics">Orthopaedics</option>
                                 <option value="paediatrics">Paediatrics</option>
                                 <option value="physiotherapy-department">Physiotherapy Department</option>
                                 <option value="psychiatry">Psychiatry</option> 
                                 <option value="urology">Urology</option>
                        </select>
                    </div>					
                    <div id="pvisit" class="col-md-6 col-xs-12 form-group">
                        <label>Visiting OPD For The First Time?*</label>
                        <br>
                        <input id="p_visit" type="radio" name="p_visit" value="yes"> Yes
                        <br>
                        <input id="p_visit" type="radio" name="p_visit" value="no"> No
                        <br>
                    </div>
                    <div id="pids" class="col-md-6 col-xs-12 form-group">
                        <label>Patient ID *</label>
                        <input name="pid" id="pid" class="form-control" type="text" autocomplete="off" />
                    </div>				
                </fieldset>
				
                <div style="text-align: center;">
                    <button id ="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span>  Request</button>
			  </div>				
            </div>
        </div>
    </form>
    <?php
}
else
{

    echo '<b>ACCESS DENIED</b>';
    exit;
}
?>



<?php
if (isset($_POST["pfirstname"]) && isset($_POST["pemail"]))
{
  if (time() < strtotime($_POST['PDatOfAppt']) ) {
	
    $query = "INSERT INTO appointment (pname, pemail, pmob_number, PDatOfAppt, pdepartment, popdvisit, patientid, preqtime )
						VALUES ('" . strip_tags($_POST["pfirstname"]) . "','" . strip_tags($_POST["pemail"]) . "','" . strip_tags($_POST["pmob_number"]) . "','" . $_POST["PDatOfAppt"] . "','" . $_POST["p_appoint_dpt"] . "',
						'" . $_POST["p_visit"] . "', '" . strip_tags($_POST["pid"]) . "', '" . time() . "')";

    mysqli_query($conn, $query);
/*	
	if (mysqli_query($conn, $query)) {
    echo "data inserted to Appointment Table";
} else {
    echo '<br>';
    echo ("Appointment Table data did not inserted" . mysqli_error($conn));
}
*/	
?>

  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Thanks for your Appointment. We'll Contact your shortly.
  </div>

<?php
	} else {
?>		
			  <div class="alert alert-warning alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	             Enter Valid Appointment date.			
			  </div>	
<?php			  
	}

}
else
{
?>
  <div class="alert alert-warning alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Fill up all the required detail for appointment.
  </div>

<?php
}

include ('footer.php');

