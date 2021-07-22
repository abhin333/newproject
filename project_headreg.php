<?php

 
$link=mysqli_connect("localhost","root","","projectmangement");


if ($link === false) {
	die("ERROR:could not connect" . mysql_connect_error());
}
	
	$Name=mysqli_real_escape_string($link,$_REQUEST['Name']);
	$Gender=mysqli_real_escape_string($link,$_REQUEST['Gender']);
	$phone_number=mysqli_real_escape_string($link,$_REQUEST['phone_number']);
	$email=mysqli_real_escape_string($link,$_REQUEST['email']);
	$user_name=mysqli_real_escape_string($link,$_REQUEST['user_name']);

	$password=mysqli_real_escape_string($link,$_REQUEST['password']);
	
    


	$sql = "INSERT INTO project_head(Name,Gender,phone_number,email,user_name,password) VALUES('$Name','$Gender','$phone_number','$email','$user_name','$password')";




	if (mysqli_query($link,$sql)) {
		echo "Records added successfully.";
	}else {
		echo "ERROR: could not able to execute $sql.".mysqli_error($link);
	}


	mysqli_close($link);
?>