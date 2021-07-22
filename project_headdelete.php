<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$phid=$_REQUEST['phid'];
$query = "DELETE FROM project_head WHERE phid=$phid"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: project_headdisplay.php"); 
?>