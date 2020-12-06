<?php
require("db_connect.php");
if(isset($_POST["submit"]))
{
	$book_id=$_POST["book_id"];
	// echo $book_id."<br>";

	$subject=$_POST["subject"];
	// echo $subject."<br>";

	$class=$_POST["class"];
	// echo $class."<br>";

	$roll_no=$_POST["roll_no"];
	// echo $roll_no."<br>";

	$issued=$_POST["issued"];
	// echo $issued."<br>";
}
else
	echo "ERROR";

$insert_sql="INSERT INTO textbook(book_id,subject,class,roll_no,issued) VALUES('$book_id','$subject','$class','$roll_no','$issued')";
mysqli_query($conn,$insert_sql);
if($insert_sql)
{
	echo '<script> window.location.href="textbook_list_table.php";</script>';
}

else
	echo "ERROR";
?>
