<!DOCTYPE html>
<html>
<style type="text/css">
  /*signup---------*/
* {box-sizing: border-box}


.container {
  padding: 16px;
      margin-left: 300px;
    margin-right: 390px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<head>
  <title> devloper signup</title>
</head>
<body style="background-color: #d4d4c8;;">
  <form action="devlopersreg.php" method="post"  enctype="multipart/form-data">

  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="Name" id=" First Name" required>
  
    <label for=" Last Name"><b> Last Name</b></label>
    <input type="text" placeholder="Last Name" name="Last_Name" id="Name" required>

    <b>Gender</b><br><br><input type="radio" id="male" name="Gender" value="male">
          <label for="male">Male</label>
          <input type="radio" id="female" name="Gender" value="female">
          <label for="female">Female</label>
          <input type="radio" id="other" name="Gender" value="other">
          <label for="other">Other</label><br><br>
          

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="mobile number"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter mobile number" name="mobile_number" id="mobile number" required>
     <label for="username"><b>User name</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
   <input type="password" placeholder="Repeat_Password" name="Repeat_password" id="psw-repeat" required><br><br>
    <b>Date Of Birth</b><input type="date" name="Date_of_Birth">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>