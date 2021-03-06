<?php

$dbhost = "localhost";
$username   = "root";
$password   = "";
$dbname     = "OnlineMgmt";
 
$conn = mysqli_connect($dbhost, $username, $password, $dbname);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Creating Users table
$sql1 = "create table Users (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	patientid VARCHAR(255) NOT NULL, 
	firstname VARCHAR(255) NOT NULL,
	middlename VARCHAR(255),
	lastname VARCHAR(255),
	DatOfBirth VARCHAR(50),
	gender VARCHAR(30),
	mob_number VARCHAR(30),
	email VARCHAR(255),
	pass1 VARCHAR(255),
	pass2 VARCHAR(255),
	user_role VARCHAR(255),
	blood_group VARCHAR(30),
	height VARCHAR(30),
	weight VARCHAR(30), 
	createdtime int(11), 
	changetime int(11),
	secuirtyq VARCHAR(255),
	secuirtya VARCHAR(255),
	city VARCHAR(255),
    country VARCHAR(255),
	department VARCHAR(50),
    landline int(11),
	profile_pic_path VARCHAR(255))";

if (mysqli_query($conn, $sql1)) {
    //echo "Users Table created successfully";
} else {
    //echo '<br>';
    //echo ("Users Table not created " . mysqli_error($conn));
}

// Creating Session table
$sql2 = "create table Session (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(255) NOT NULL,
	pass1 VARCHAR(255) NOT NULL,
	browser_detail VARCHAR(255) NOT NULL,
	client_ip VARCHAR(255) NOT NULL,
	logintime int(11) NOT NULL
	)";

if (mysqli_query($conn, $sql2)) {
    //echo "Session Table created";
} else {
    //echo '<br>';
    //echo ("Session Table not created" . mysqli_error($conn));
}


// Creating Appointment table
$sql3 = "create table Appointment (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(255),
	pemail VARCHAR(255),
	pmob_number VARCHAR(30),
	PDatOfAppt VARCHAR(30),
	pdepartment VARCHAR(50),
    popdvisit VARCHAR(30),
    patientid VARCHAR(255), 
    preqtime int(11)
	)";
if (mysqli_query($conn, $sql3)) {
    //echo "Appointment Table created";
} else {
    //echo '<br>';
    //echo ("Appointment Table not created" . mysqli_error($conn));
}


// Creating Contact us  table
$sql4 = "create table query (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			cname VARCHAR(255),
			cqueryt VARCHAR(255),
			cqueryq VARCHAR(255),	
			cemail VARCHAR(255),
			cmob_number VARCHAR(30),
			creqtime int(11)
	   )";
if (mysqli_query($conn, $sql4)) {
    //echo "contact us Table created";
} else {
    //echo '<br>';
    //echo ("contact us Table not created" . mysqli_error($conn));
}



mysqli_close($conn);
?>