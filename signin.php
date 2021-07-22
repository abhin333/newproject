


<!DOCTYPE html>
<html>
<style type="text/css">
  /*signup---------*/
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
      margin-left: 428px;
    margin-right: 499px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #ffff;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ffff;
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
  background-color: #89afb5;
  text-align: center;
}
</style>
<style>
    select {
        width: 200px;
        height:45px;

        margin: 10px;
    }
    select:focus {
        min-width: 150px;
        width: auto;
    }
</style>
<head>
  <title>sign in</title>
</head>
<body style="background-color: #89afb5;">

    <center><b style="font-size:xxx-large;">LOGIN FORM</b></center>

  <div class="container">
    
    <hr>
    
    <form action="login1.php" method="post">
<table width="408" height="100%" border="2" bgcolor="silver">
      <h2><b>LOGIN MEMBERS </b></h2>

<tr>
<td height="36" bgcolor="silver"><b>User Name:</b></td>
<td height="36" bgcolor="silver"><input type="text" name="username" /></td>
</tr>

<tr>
<td height="36" bgcolor="silver"><b>Password:</b></td>
<td height="36" bgcolor="silver"><input type="password" name="password" /></td>
</tr>
<tr><td style="width:200px;" bgcolor="silver"><b>Select User:</b></td>
       <td style="width:200px;" bgcolor="silver"> <select name="cmbUser">
     <option height="36"></option>
     <option>devlopers</option>
     <option>project_head</option>
     <option>Admin</option></select></td></tr>
<tr><td></td><td bgcolor="silver" height="36" bgcolor="silver" align="center"><input type="submit" value="LOGIN" /></td></tr>
</form>
  </hr>
  </div>
</form>
</body>
</html>
