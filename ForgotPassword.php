<?php
  include('header.php');
if (empty($_SESSION)) {
?>
    <form id="fpassword" action="" method="post">
        <div class="row">
            <div id="loginform_id">
                <div id="registrationform_name">Password reset</div>
                <fieldset>
                    <div class="col-xs-12 form-group">
                        <label>E-mail *</label>
                        <input name="email" id="email" class="form-control" type="email" required autocomplete="off" />
                    </div>
                    <div class="col-xs-12 form-group">
                        <label>Secuirty Question*</label>
                        <select name="secuirtyq" class="form-control" id="secuirtyq" required>
                            <option value="">-- NONE --</option>
                            <option value="What was your childhood name?">What was your childhood name?</option>
                            <option value="Which City do you love more?">Which City do you love more?</option>
                            <option value="Favourite Sport?">Favourite Sport?</option>
                            <option value="Food you cooked first time?">Food you cooked first time?</option>
                            <option value="Favourite Past time?">Favourite Past time?</option>
                        </select>
                    </div>
                    <div class="col-xs-12 form-group">
                        <label> Answer *</label>
                        <input name="secuirtya" id="secuirtya" class="form-control" type="text" required autocomplete="off" />
                    </div>

                    <div class="col-xs-12 form-group">
                        <label> New Password *</label>
                        <input name="pass1" id="pass1" class="form-control" type="password" required autocomplete="off" />
                    </div>
                    <div class="col-xs-12 form-group">
                        <label>Retype New Password *</label>
                        <input name="pass2" id="pass2" class="form-control" type="password" required autocomplete="off" />
                    </div>
                </fieldset>
                <br>
                <div style="text-align: center;">
                    <button id="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Password Change</button>
                </div>
            </div>
        </div>
        </div>
    </form>
    <?php
} else {
    //header("Location: ForgotPassword.php");
}
	  include('footer.php');
?>

<?php

/**
 * Validating email & mobile number exist in User table
 */
if ( isset($_POST["email"]) && isset($_POST["secuirtyq"]) && isset($_POST["secuirtya"]) && isset($_POST["pass1"]) && isset($_POST["pass2"]) ) {
    $sql = "SELECT * from Users where email='" . $_POST["email"] . "' AND secuirtyq='" . $_POST["secuirtyq"] . "' AND secuirtya='" . $_POST["secuirtya"] . "'";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) >= 1) {
	
		/*Updating password value*/		
		$sql8 = "UPDATE Users SET pass1='" . md5($_POST['pass1']) . "' , 
		                          pass2='" . md5($_POST['pass2']) . "' ,
								  changetime='" . time() . "' 
								  WHERE email='" . $_POST['email'] . "' AND 
								  secuirtyq='" . $_POST['secuirtyq'] . "' AND 
								  secuirtya='" . $_POST['secuirtya'] . "'";
								  
		mysqli_query($conn, $sql8);
?>		
  <div class="alert alert-success alert-dismissible">
    <strong>Success!</strong> You Password has been reset successfully. You can login from <a href="UserLogin.php" class="alert-link">here.</a>.
  </div>		
		
		
<?php    } else {  ?>
        <div class="alert alert-danger alert-dismissible">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Warning!</strong> Invalid detail. please enter appropriate detail as mentioned while registration!
        </div>
		<?php
    }
}






