<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$empid=$_REQUEST['empid'];
$query = "SELECT * from signup where empid='".$empid."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update devloper Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body bgcolor="blue sky">
<div class="form">

<h1>Update devloper Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$Name =$_REQUEST['Name'];
$Gender=$_REQUEST['Gender'];
$email =$_REQUEST['email'];
$mobile_number =$_REQUEST['mobile_number'];
$password=$_REQUEST['password'];
$Repeat_password=$_REQUEST['Repeat_password'];
$Date_of_birth=$_REQUEST['Date_of_birth'];




$update="update signup set Name='".$Name."', Gender='".$Gender."',email='".$email."',mobile_number='".$mobile_number."',password='".$password."',Repeat_password='".$Repeat_password."',Date_of_birth='".$Date_of_birth."', where empid='".$empid."'";

mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='admindisplay.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
	
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="empid" type="hidden" value="<?php echo $row['empid'];?>" />

<p><input type="text" name="Name" placeholder="Enter  Name" 
required value="<?php echo $row['Name'];?>" /></p>

<p><input type="text" name="Gender" placeholder="Enter Gender" 
required value="<?php echo $row['Gender'];?>" /></p>

<p><input type="text" name="email" placeholder="Enter email" 
required value="<?php echo $row['email'];?>" /></p>

<p><input type="text" name="mobile_number" placeholder="Enter mobile number" 
required value="<?php echo $row['mobile_number'];?>" /></p>

<p><input type="text" name="password" placeholder="Enter password" 
required value="<?php echo $row['password'];?>" /></p>

<p><input type="text" name="Repeat_password" placeholder="Enter Repeat_password" 
required value="<?php echo $row['Repeat_password'];?>" /></p>

<p><input type="text" name="Date_of_birth" placeholder="Enter  Date_of_birth" 
required value="<?php echo $row['Date_of_birth'];?>" /></p>



<p><input name="submit"  type="submit"  value="Update"  /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>