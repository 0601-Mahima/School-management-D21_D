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
  $id=$_POST['book_id'];
  // echo $id;
  $update_sql="UPDATE textbook SET book_id='$book_id',subject='$subject',class='$class',roll_no='$roll_no',issued='$issued' WHERE id='$id'";
  mysqli_query($conn,$update_sql);
  if($update_sql)
  	// echo "updated successfully";
    echo '<script> window.location.href="book_list.php";</script>';
  else
  	echo "ERROR";

  ?>
