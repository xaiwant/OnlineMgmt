<?php
include('header.php');
include('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

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
        echo 'Your Password has been updated successfully';
        echo '<br>';
        echo 'You can now try login with new credentials';
        echo '<br><br>';
    } else {
        echo 'You must have entered wrong details. please do refill correctly.';
        echo '<br>';
		echo '<l>Redirecting.....</l>';
        header('Refresh: 3; URL=ForgotPassword.php');
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

include('footer.php');