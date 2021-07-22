<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['username'];
$Password=$_POST['password'];
$UserType=$_POST['cmbUser'];
if ($UserType=="Admin")
{
$con = mysqli_connect("localhost", "root", "", "projectmangement");
//$sql = "select * from admininsertion where username='".$UserName."' and password='".$Password."'";

$sql = "SELECT * FROM `admininsertion` WHERE username='".$UserName."' and password='".$Password."'";
echo $sql;
//exit();
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
} 
else 
{
header("location:admin.php");

}
mysql_close($con);
}
else if($UserType=="project_head")
{
$con = mysqli_connect("localhost", "root", "", "projectmangement");
//mysqli_select_db("projectmangement", $con);
$sql = "select * from project_head
 where user_name='".$UserName."' and password='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
} 
else 
{
$_SESSION['ID']=$row['Station_Id'];
$_SESSION['Name']=$row['Station_Name'];
header("location: project_headinfo.php");

}
mysql_close($con);
}
else
{
$con = mysqli_connect("localhost", "root", "", "projectmangement");

$sql = "select * from devlopers_tb where username='".$UserName."' and password='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
} 
else 
{
$_SESSION['ID']=$row['User_Id'];
$_SESSION['Name']=$row['Name'];
header("location:devloperinfo.php");

}
mysql_close($con);
}

?>
</body>
</html>
