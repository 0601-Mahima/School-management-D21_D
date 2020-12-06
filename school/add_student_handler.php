<?php
require("db_connect.php");
if(isset($_POST["submit"]))
{
	$roll_no=$_POST["roll_no"];
	// echo $roll_no."<br>";

	$name=$_POST["sname"];
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

$insert_sql="INSERT INTO student_details(roll_no,name,class,dob,yoj) VALUES('$roll_no','$name','$class','$dob','$yoj')";
mysqli_query($conn,$insert_sql);
if($insert_sql)
{
	echo '<script> window.location.href="student_list_table.php";</script>';
}

else
	echo "ERROR";
?>
