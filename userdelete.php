<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$uid=$_REQUEST['uid'];
$query = "DELETE FROM user WHERE uid=$uid"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: userdisplay.php"); 
?>