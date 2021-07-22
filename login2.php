<html>
<head>
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
   
	<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align="center" border="0" bgcolor="green" width="540" cellpadding="9" cellspacing="0" height="525">
          <tr>
            <td colspan="3" height="2"><img src="banner.gif" width="860"></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
	     	<font size="4">
         
         <a href="index.php">HOME</a>  |
		     <a href="location.php">ABOUT US</a> 
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;<img src="capturee.gif" width="200" height="179"  alt=""/></td>
            <td width="50%" align="center" bgcolor="#FFFFFF">
       
<div class="ex">

<form action="login1.php" method="post">
<table width="408" height="142" border="0" bgcolor="silver">
	    <h2><b>LOGIN MEMBERS </b></h2>

<tr>
<td height="36" bgcolor="#FFFFFF"><b>User Name:</b></td>
<td height="36" bgcolor="#FFFFFF"><input type="text" name="username" /></td>
</tr>

<tr>
<td height="36" bgcolor="#FFFFFF"><b>Password:</b></td>
<td height="36" bgcolor="#FFFFFF"><input type="password" name="password" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Select User:</b></td>
       <td height="36" bgcolor="#FFFFFF"> <select name="cmbUser">
		 <option>signup</option>
     <option>project_head</option>
     <option>Admin</option></td></tr>
<tr><td bgcolor="#FFFFFF" height="36" bgcolor="#FFFFFF" align="center"><input type="submit" value="LOGIN" /></td></tr>
</form>
</td>
</tr>
<tr>
  <?php
           include("footer.php");
                ?>
</tr>
</table>
</body>
</html>