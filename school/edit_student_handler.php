<?php
require("db_connect.php");
if(isset($_POST["submit"]))
{
	$roll_no=$_POST["roll_no"];
	// echo $roll_no."<br>";

	$name=$_POST["name"];
	// echo $name."<br>";

	$class=$_POST["class"];
	// echo $class."<br>";

	$dob=$_POST["dob"];
	// echo $dob."<br>";

	$yoj=$_POST["yoj"];
	// echo $yoj."<br>";
}
else
	echo "ERROR";
  $id=$_POST['stu_id'];
  // echo $id;
  $update_sql="UPDATE student_details SET roll_no='$roll_no',name='$name',class='$class',dob='$dob',yoj='$yoj' WHERE id='$id'";
  mysqli_query($conn,$update_sql);
  if($update_sql)
  	// echo "updated successfully";
    echo '<script> window.location.href="student_list_table.php";</script>';
  else
  	echo "ERROR";

  ?>
