<?php
$con = mysqli_connect("localhost", "root", "", "projectmangement");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<style >
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
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h2>View  project Records</h2>
<table id=customers width="100%" border="1" style="border-collapse:collapse;">
<thead>
	
<tr>

<th><strong>Sl No</strong></th>
<th><strong> project Name</strong></th>
<th><strong>language</strong></th>
<th><strong>due date</strong></th>
<th><strong>customer name</strong></th>
<th><strong>cost</strong></th>





</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from project_tb ORDER BY pid desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Name"]; ?></td>
<td align="center"><?php echo $row["language"]; ?></td>
<td align="center"><?php echo $row["due_date"]; ?></td>
<td align="center"><?php echo $row["customer_name"]; ?></td>
<td align="center"><?php echo $row["cost"]; ?></td>


</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>