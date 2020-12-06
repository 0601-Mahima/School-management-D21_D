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

$insert_sql="INSERT INTO attendance(subject,roll_no,name,class,date,attended) VALUES('$subject','$roll_no','$name','$class','$date','$attended')";
mysqli_query($conn,$insert_sql);
if($insert_sql)
{

	//echo "Added successfully";
	echo '<script> window.location.href="attendance_list_table.php";</script>';
}

else
	echo "ERROR";
?>
