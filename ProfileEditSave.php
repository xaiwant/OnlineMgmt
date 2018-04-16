<?php
include ('header.php');
include ('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

if (isset($_POST))
{

    $filepath = "images/" . $_FILES["profile-image"]["name"];
    move_uploaded_file($_FILES["profile-image"]["tmp_name"], $filepath);
    if (isset($_POST["department"]))
    {
        $dept = $_POST["department"];
    }
    else
    {
        $dept = NULL;
    }

    $sql8 = "UPDATE users SET firstname='" . $_POST['firstname'] . "' ,
							 middlename='" . $_POST["middlename"] . "',
							 lastname='" . $_POST["lastname"] . "',
							 DatOfBirth='" . $_POST["DatOfBirth"] . "',
							 gender='" . $_POST["gender"] . "',
							 mob_number='" . $_POST["mob_number"] . "',
							 email='" . $_POST["email"] . "',
						     blood_group='" . $_POST["blood_group"] . "',
						     height='" . $_POST["height"] . "',
        			         weight='" . $_POST["weight"] . "',
							 changetime='" . time() . "',								 
   				             secuirtyq='" . $_POST["secuirtyq"] . "',
        			         secuirtya='" . $_POST["secuirtya"] . "',
   				             city='" . $_POST["city"] . "',
   				             country='" . $_POST["country"] . "',				
   				             department='" . $dept . "',
   				             landline='" . $_POST["landline"] . "',
   				             profile_pic_path	='" . $_FILES["profile-image"]["name"] . "'							 
   				             WHERE patientid='" . $_GET['id'] . "'";
    mysqli_query($conn, $sql8);
    echo 'Details updated successfully !!';
    echo '<br>';
    header('Refresh: 1; URL=ProfileEditPage.php');
}
else
{
    header('Refresh: 1; URL=UserLogin.php');
}

