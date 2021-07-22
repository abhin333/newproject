<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
$msg = "";
//require 'config.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$username = $_REQUEST['user'];
$password = $_REQUEST['password'];
$name = $_REQUEST['cmbUser'];
$sql = "SELECT * FROM `admininsertion` WHERE username='".$username."' and password='".$password."' and dep='".$name."'";
  $result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

   /* print_r($row);exit(); */


if ($row[2] == $username && $row[3] == $password && $row[1] == $name){
 if($row[1] == 'admin'){
$_SESSION['admin'] = $row[0];
echo "<script>window.location.assign('index.php');</script>";
 }else{
$_SESSION['admin'] = $row[0];
echo "<script>window.location.assign('staffdepartment.php');</script>";
 }
}else{
 $msg = "username or password is wrong";
}
}
?>
