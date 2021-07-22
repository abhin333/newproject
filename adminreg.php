<?php

$link=mysqli_connect("localhost","root","","projectmangement");


if ($link === false) {
  die("ERROR:could not connect" . mysql_connect_error());
}
  
    $Name=mysqli_real_escape_string($link,$_REQUEST['Name']);
    $Last_Name=mysqli_real_escape_string($link,$_REQUEST['Last_Name']);
    $email=mysqli_real_escape_string($link,$_REQUEST['email']);
    $username=mysqli_real_escape_string($link,$_REQUEST['username']);
    $password=mysqli_real_escape_string($link,$_REQUEST['password']);
    $repeat_password=mysqli_real_escape_string($link,$_REQUEST['repeat_password']);
    $phone_number=mysqli_real_escape_string($link,$_REQUEST['phone_number']);
    $Date_of_Birth=mysqli_real_escape_string($link,$_REQUEST['Date_of_Birth']);
  
    


  $sql = "INSERT INTO admininsertion(Name,Last_Name,email,username,password,repeat_password,phone_number,Date_of_Birth) VALUES('$Name','$Last_Name','$email','$username','$password','$repeat_password','$phone_number','$Date_of_Birth')";

  
  if (mysqli_query($link,$sql)) {
    echo "Records added successfully.";
  }else {
    echo "ERROR: could not able to execute $sql.".mysqli_error($link);
  }
  mysqli_close($link);
?>