<?php
include('header.php');
if (empty($_SESSION)) {
?>
    <form id="register" action="" method="post">
        <div class="row">
            <div id="registrationform_id">
                <div id="registrationform_name">Sign Up</div>
                <fieldset>
                    <legend><span class="glyphicon glyphicon-user"></span> Personal Information:</legend>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>First name *</label>
                        <input name="firstname" id="firstname" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Middle name *</label>
                        <input name="middlename" id="middlename" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Last name *</label>
                        <input name="lastname" id="lastname" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Email *</label>
                        <input name="email" id="email" class="form-control" type="email" required autocomplete="off" />
                    </div>
                    <div class="col-xs-12 form-group">
                        <label>Mobile *</label>
                        <input name="mob_number" id="mob_number" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Password *</label>
                        <input name="pass1" id="pass1" class="form-control" type="password" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Confirm password *</label>
                        <input name="pass2" id="pass2" class="form-control" type="password" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                         <div id="message"></div>
                     </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>DOB *</label>
                        <input name="DatOfBirth" id="DatOfBirth" class="form-control" type="date" required />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Gender *</label>
                        <select name="gender" class="form-control" id="gender" required>
                            <option value="">- None -</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="transgender">Transgender</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Who are You? *</label>
                        <select name="user_role" class="form-control" id="user_role" required>
                            <option value="">- None -</option>
                            <option value="patient">Patient</option>
                            <option value="doctor">Doctor</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <legend><span class="glyphicon glyphicon-paste"></span> Physical Information:</legend>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>height *</label>
                        <input name="height" id="height" class="form-control" type="text" required />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>weight *</label>
                        <input name="weight" id="weight" class="form-control" type="text" required />
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Blood Group: *</label>
                        <select name="blood_group" class="form-control" id="blood_group" required >
                            <option value="">- None -</option>
                            <option value="A">A</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="AB">AB</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O">O</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                </fieldset>

                <fieldset>
                    <legend><span class="glyphicon glyphicon-lock"></span> Secuirty question:</legend>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Question *</label>
                        <select name="secuirtyq" class="form-control" id="secuirtyq" required>
                            <option value="">- None -</option>
                            <option value="What was your childhood name?">What was your childhood name?</option>
                            <option value="Which City do you love more?">Which City do you love more?</option>
                            <option value="Favourite Sport?">Favourite Sport?</option>
                            <option value="Food you cooked first time?">Food you cooked first time?</option>
                            <option value="Favourite Past time?">Favourite Past time?</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Answer *</label>
                        <input name="secuirtya" id="secuirtya" class="form-control" type="text"  autocomplete="off" required />
                    </div>
                </fieldset>
				
                <div style="text-align: center;">
                    <button id ="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span>  Register</button>
			  </div>
            </div>
        </div>
    </form>
    <?php 
} else {
	header('Refresh: 1; URL=UserLogin.php');
}
//include('footer.php');
?>



<?php




if (isset($_POST["mob_number"]) && isset($_POST["email"])) {
    $sql = "SELECT * from Users where mob_number='" . $_POST["mob_number"] . "' AND email='" . $_POST["email"] . "'";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) == 0) {
        
		/*Generating unique PatientID*/
		if ($_POST["user_role"] == 'patient') {
          $patient_id = 'PAT' . substr($_POST["mob_number"], -4) . '' . substr($_POST["firstname"], 0, 2) . '' . substr($_POST["lastname"], 0, 2) . '' . substr($_POST["DatOfBirth"], 0, 2) . '' . date('His', time());
		} else {
		  $patient_id = 'DOC' . substr($_POST["mob_number"], -4) . '' . substr($_POST["firstname"], 0, 2) . '' . substr($_POST["lastname"], 0, 2) . '' . substr($_POST["DatOfBirth"], 0, 2) . '' . date('His', time());	
		}
		
        $query      = "INSERT INTO Users (patientid, firstname, middlename, lastname, DatOfBirth, gender, mob_number, email, pass1, pass2, user_role, blood_group, height, weight, createdtime,secuirtyq, secuirtya )
						VALUES ('" . strtoupper($patient_id) . "', '" . $_POST["firstname"] . "','" . $_POST["middlename"] . "','" . $_POST["lastname"] . "','" . $_POST["DatOfBirth"] . "','" . $_POST["gender"] . "',
						'" . $_POST["mob_number"] . "','" . $_POST["email"] . "','" . md5($_POST["pass1"]) . "','" . md5($_POST["pass2"]) . "','" . $_POST["user_role"] . "','" . $_POST["blood_group"] . "','" . $_POST["height"] . "',
						'" . $_POST["weight"] . "', '" . time() . "', '" . $_POST["secuirtyq"] . "', '" . $_POST["secuirtya"] . "')";
        
        mysqli_query($conn, $query);
?>		
		
		
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Thanks for your registration <i><?php echo $_POST["firstname"]; ?></i> your patientID is <b><?php echo strtoupper($patient_id); ?> </b> use this ID for future reference.
  </div>		
		
<?php
    } else {
?>
  <div class="alert alert-warning alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> seems like you already have an account with us. please login.
  </div>

<?php
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
	//header("Location: index.php"); 
}
include('footer.php');