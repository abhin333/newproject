<?php

$link=mysqli_connect("localhost","root","","projectmangement");


if ($link === false) {
  die("ERROR:could not connect" . mysql_connect_error());
}

  $Name=mysqli_real_escape_string($link,$_REQUEST['Name']);
  $Last_Name=mysqli_real_escape_string($link,$_REQUEST['Last_Name']);
  $Gender=mysqli_real_escape_string($link,$_REQUEST['Gender']);
  $email=mysqli_real_escape_string($link,$_REQUEST['email']);
  $mobile_number=mysqli_real_escape_string($link,$_REQUEST['mobile_number']);
  $username=mysqli_real_escape_string($link,$_REQUEST['username']);
  $password=mysqli_real_escape_string($link,$_REQUEST['password']);
  $Repeat_password=mysqli_real_escape_string($link,$_REQUEST['Repeat_password']);
  $Date_of_Birth=mysqli_real_escape_string($link,$_REQUEST['Date_of_Birth']);
 


  $sql = "INSERT INTO devlopers_tb(Name,Last_Name,Gender,email,mobile_number,username,password,Repeat_password,Date_of_Birth) VALUES('$Name','$Last_Name','$Gender','$email','$mobile_number','$username','$password','$Repeat_password','$Date_of_Birth')";

  
  if (mysqli_query($link,$sql))
   {
    echo "Records added successfully.";
  }
  else
   {
    echo "ERROR: could not able to execute $sql.".mysqli_error($link);
  }
  mysqli_close($link);
?>