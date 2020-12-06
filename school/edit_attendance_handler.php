<?php
require("db_connect.php");
if(isset($_POST["submit"]))
{
	$subject=$_POST["subject"];
	// echo $subject."<br>";

	$roll_no=$_POST["roll_no"];
	// echo $roll_no."<br>";

	$name=$_POST["name"];
	// echo $name."<br>";

	$class=$_POST["class"];
	// echo $class."<br>";

	$date=$_POST["date"];
	// echo $date."<br>";

	$attended=$_POST["attended"];
	// echo $attended."<br>";
}
else
	echo "ERROR";
  $id=$_POST['att_id'];
  // echo $id;
  $update_sql="UPDATE attendance SET subject='$subject',roll_no='$roll_no',name='$name',class='$class',date='$date',attended='$attended' WHERE id='$id'";
  mysqli_query($conn,$update_sql);
  if($update_sql)
  	// echo "updated successfully";
    echo '<script> window.location.href="attendance_list_table.php";</script>';
  else
  	echo "ERROR";

  ?>
