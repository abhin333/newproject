<?php





$link=mysqli_connect("localhost","root","","projectmangement");


if ($link === false) {
	die("ERROR:could not connect" . mysql_connect_error());
}
	
	$Name=mysqli_real_escape_string($link,$_REQUEST['Name']);
	$phone_number=mysqli_real_escape_string($link,$_REQUEST['phone_number']);
	$location=mysqli_real_escape_string($link,$_REQUEST['location']);
	$project=mysqli_real_escape_string($link,$_REQUEST['project']);
	
    


	$sql = "INSERT INTO user(Name,phone_number,location,project) VALUES('$Name','$phone_number','$location','$project')";








	
	if (mysqli_query($link,$sql)) {
		echo "Records added successfully.";
	}else {
		echo "ERROR: could not able to execute $sql.".mysqli_error($link);
	}




	mysqli_close($link);
?>