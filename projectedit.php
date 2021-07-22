<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$pid=$_REQUEST['pid'];
$query = "SELECT * from project_tb where pid='".$pid."'"; 
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

<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$pid=$_REQUEST['pid'];

$Name =$_REQUEST['Name'];
$language =$_REQUEST['language'];
$due_date=$_REQUEST['due_date'];
$customer_name=$_REQUEST['customer_name'];
$cost=$_REQUEST['cost'];





$update="update project set Name='".$Name."', language='".$language."',
due_date='".$due_date."', customer_name='".$customer_name."',cost='".$cost."' where pid='".$pid."'";

mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='select1.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
	
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="pid" type="hidden" value="<?php echo $row['pid'];?>" />

<p><input type="text" name="Name" placeholder="Enter project Name" 
required value="<?php echo $row['Name'];?>" /></p>

<p><input type="text" name="language" placeholder="Enter language" 
required value="<?php echo $row['language'];?>" /></p>

<p><input type="text" name="due_date" placeholder="Enter due_date" 
required value="<?php echo $row['due_date'];?>" /></p>

<p><input type="text" name="cost" placeholder="Enter cost" 
required value="<?php echo $row['cost'];?>" /></p>



<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>