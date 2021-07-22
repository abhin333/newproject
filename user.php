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

<h3>ENTER THE USER DETIALS</h3>

<div>
<form action="userreg.php" method="post"  enctype="multipart/form-data">
  
  ENTER USER NAME:
  <input type="text" name="Name"><br>
ENTER PHONE_NUMBER:
<input type="number" name="phone_number"><br><br>
ENTER LOCATION
<input type="text" name="location"><br><br>
ENTER project name
<input type="text" name="project">



   <input type="submit" name="submit"><br>

  
</form>
</div>

</body>
</html>