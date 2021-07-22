<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$empid=$_REQUEST['empid'];
$query = "DELETE FROM signup WHERE empid=$empid"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: devloperdisplay.php"); 
?>



