<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$uid=$_REQUEST['uid'];
$query = "SELECT * from user where uid='".$uid."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>Update user Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$uid=$_REQUEST['uid'];

$Name=$_REQUEST['Name'];
$phone_number =$_REQUEST['phone_number'];
$location =$_REQUEST['location'];
$project =$_REQUEST['project'];






$update="update user set Name='".$Name."', phone_number='".$phone_number."',
location='".$location."', project='".$project."' where uid='".$uid."'";

mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='select1.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
	
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="uid" type="hidden" value="<?php echo $row['uid'];?>" />

<p><input type="text" name="Name" placeholder="Enter  Name" 
required value="<?php echo $row['Name'];?>" /></p>

<p><input type="text" name="phone_number" placeholder="Enter phone_number" 
required value="<?php echo $row['phone_number'];?>" /></p>

<p><input type="text" name="location" placeholder="Enter location" 
required value="<?php echo $row['location'];?>" /></p>

<p><input type="text" name="price" placeholder="Enter project" 
required value="<?php echo $row['project'];?>" /></p>



<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>