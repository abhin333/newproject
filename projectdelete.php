<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$pid=$_REQUEST['pid'];
$query = "DELETE FROM project_tb WHERE pid=$pid"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: projectdisplay.php"); 
?>