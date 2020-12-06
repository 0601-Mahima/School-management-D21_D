<?php
require("db_connect.php");

if(isset($_POST["delete"]))
{
  $id=$_POST['delete'];
//  echo $id;
}
$update_sql="UPDATE student_details SET active=0 WHERE id='$id'";
mysqli_query($conn,$update_sql);
if($update_sql)
  // echo "updated successfully";
  echo '<script> window.location.href="student_list_table.php";</script>';
else
  echo "ERROR";
