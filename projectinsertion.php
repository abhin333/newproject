<!DOCTYPE html>
<html style="margin-left: 307px;
    margin-right: 445px";
  >
<style>

  
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body bgcolor="skyblue">

<h3>ENTER THE PROJECT DETIALS</h3>

<div>
<form action="projectreg.php" method="post"  enctype="multipart/form-data">
  
  ENTER PROJECT NAME:
  <input type="text" name="Name"><br>
ENTER THE LANGUAGE/appication:
<input type="text" name="language">
ENTER DUE DATE:
<input type="date" name="due_date"><br><br>
ENTER CUSTOMER
<input type="text" name="customer_name">
Enter Expected_cost
<input type="number" name="cost">


   <input type="submit" name="submit"><br>

  
</form>
</div>

</body>
</html>