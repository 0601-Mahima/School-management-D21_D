<?php
require("db_connect.php");
if(isset($_POST["submit"]))
{


	$roll_no=$_POST["roll_no"];
	// echo $roll_no."<br>";

	$name=$_POST["name"];
	// echo $name."<br>";

	$amount=$_POST["amount"];
	// echo $amount."<br>";



}
else
	echo "ERROR";

$insert_sql="INSERT INTO midday_meal(roll_no,name,amount) VALUES('$roll_no','$name','$amount')";
mysqli_query($conn,$insert_sql);
if($insert_sql)
{

//	echo "Added successfully";
	echo '<script> window.location.href="meal_list.php";</script>';
}

else
	echo "ERROR";
?>
