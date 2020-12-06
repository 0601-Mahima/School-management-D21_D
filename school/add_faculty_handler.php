<?php
require("db_connect.php");

if(isset($_POST["submit"]))
{
	$faculty_id=$_POST["faculty_id"];
	// echo $faculty_id."<br>";

	$fname=$_POST["fname"];
	// echo $fname."<br>";

	$phone=$_POST["phone_no"];
	 // echo $phone."<br>";

	$email=$_POST["email"];
	// echo $email."<br>";

	$password=$_POST["password"];
	// echo $password."<br>";

}
else
	echo "ERROR";

$insert_sql="INSERT INTO users(faculty_id,faculty_name,phone_no,email,password) VALUES('$faculty_id','$fname','$phone','$email','$password')";
mysqli_query($conn,$insert_sql);
if($insert_sql)
{
	// echo "I";
	echo '<script> window.location.href="index.html";</script>';
}

else
echo "Error";


?>
