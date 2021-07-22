<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!DOCTYPE html>

<html>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

<head>
<meta charset="utf-8">
<title>View devloper Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div class="form">

<h2>View  developer Records</h2>
<table id=customers width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Sl No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Gender</strong></th>
<th><strong>email</strong></th>
<th><strong>mobile_number</strong></th>
<th><strong>Date_of_birth</strong></th>


<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from signup ORDER BY empid desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Name"]; ?></td>
<td align="center"><?php echo $row["Gender"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["mobile_number"]; ?></td>
<td align="center"><?php echo $row["Date_of_birth"]; ?></td>

<td align="center">
<a href="devloperedit.php?empid=<?php echo $row["empid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="devloperdelete.php?empid=<?php echo $row["empid"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>