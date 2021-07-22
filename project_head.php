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
<body>

<h3>ENTER THE PROJECT_HEAD DETIALS</h3>

<div>
<form action="project_headreg.php" method="post"  enctype="multipart/form-data">
  
  ENTER  NAME:
  <input type="text" name="Name"><br>
  <b>Gender</b><br><br><input type="radio" id="male" name="Gender" value="male">
          <label for="male">Male</label>
          <input type="radio" id="female" name="Gender" value="female">
          <label for="female">Female</label>
          <input type="radio" id="other" name="Gender" value="other">
          <label for="other">Other</label><br><br>
          

  enter phone number
  <input type="number" name="phone_number"><br><br>
  enter email
  <input type="text" name="email">
  enter user_name
  <input type="text" name="user_name">
  enter password
  <input type="password" name="password">
   <input type="submit" name="submit"><br>

  
</form>
</div>

</body>
</html>