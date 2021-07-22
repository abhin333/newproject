<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$phid=$_REQUEST['phid'];
$query = "SELECT * from project_head where phid='".$phid."'"; 
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

<h1>Updateproject_head Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$phid=$_REQUEST['phid'];

$Name =$_REQUEST['Name'];
$Gender =$_REQUEST['Gender'];
$phone_number =$_REQUEST['phone_number'];
$email =$_REQUEST['email'];




$update="update project_head set Name='".$Name."',Gender='".$Gender."', phone_number='".$phone_number."',email='".$email."' where phid='".$phid."'";

mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='select1.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
	
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="phid" type="hidden" value="<?php echo $row['phid'];?>" />

<p><input type="text" name="Name" placeholder="Enter  Name" 
required value="<?php echo $row['Name'];?>" /></p>
<p><input type="text" name="Gender" placeholder="Enter  Gender" 
required value="<?php echo $row['Gender'];?>" /></p>

<p><input type="text" name="phone_number" placeholder="Enter phone_number" 
required value="<?php echo $row['phone_number'];?>" /></p>

<p><input type="text" name="email" placeholder="Enter email" 
required value="<?php echo $row['email'];?>" /></p>



<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>