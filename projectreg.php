<?php




$link=mysqli_connect("localhost","root","","projectmangement");


if ($link === false) {
  die("ERROR:could not connect" . mysql_connect_error());
}
  
  $Name=mysqli_real_escape_string($link,$_REQUEST['Name']);
  $language=mysqli_real_escape_string($link,$_REQUEST['language']);
  $due_date=mysqli_real_escape_string($link,$_REQUEST['due_date']);
  $customer_name=mysqli_real_escape_string($link,$_REQUEST['customer_name']);
  $cost=mysqli_real_escape_string($link,$_REQUEST['cost']);
    


  $sql = "INSERT INTO project_tb(Name,language,due_date,customer_name,cost) VALUES('$Name','$language','$due_date','$customer_name','$cost')";






  
  if (mysqli_query($link,$sql)) {
    echo "Records added successfully.";
  }else {
    echo "ERROR: could not able to execute $sql.".mysqli_error($link);
  }




  mysqli_close($link);
?>