<?php
include('header.php');
include('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

/**
 * Validating email & mobile number exist in User table
 */
if (isset($_POST["mob_number"]) && isset($_POST["email"])) {
    $sql = "SELECT * from Users where mob_number='" . $_POST["mob_number"] . "' AND email='" . $_POST["email"] . "'";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) == 0) {
        
		/*Generating unique PatientID*/
        $patient_id = 'PAT' . substr($_POST["mob_number"], -4) . '' . substr($_POST["firstname"], 0, 2) . '' . substr($_POST["lastname"], 0, 2) . '' . substr($_POST["DatOfBirth"], 0, 2) . '' . date('His', time());
        $query      = "INSERT INTO Users (patientid, firstname, middlename, lastname, DatOfBirth, mob_number, email, pass1, pass2, blood_group, height, weight, createdtime)
                  VALUES ('" . strtoupper($patient_id) . "', '" . $_POST["firstname"] . "','" . $_POST["middlename"] . "','" . $_POST["lastname"] . "','" . $_POST["DatOfBirth"] . "','" . $_POST["mob_number"] . "',    
                '" . $_POST["email"] . "','" . md5($_POST["pass1"]) . "','" . md5($_POST["pass2"]) . "','" . $_POST["blood_group"] . "','" . $_POST["height"] . "',
                '" . $_POST["weight"] . "', '" . time() . "')";
        
        mysqli_query($conn, $query);
        echo 'Thanks for your registration <i>' . $_POST["firstname"] . '.</i>your patientID is <b>' . strtoupper($patient_id) . '</b>';
        echo '<br>';
        echo 'You can use ID for future reference.';
        echo '<br><br>';
    } else {
        echo 'seems like you already have an account with us. please login';
        echo '<br>';
		echo '<l>Redirecting.....</l>';
        header('Refresh: 3; URL=UserLogin.php');
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
	header("Location: UserRegistration.php"); 
}

include('footer.php');