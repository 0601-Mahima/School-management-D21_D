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
  $id=$_POST['meal_id'];
  // echo $id;
  $update_sql="UPDATE midday_meal SET roll_no='$roll_no',name='$name',amount='$amount' WHERE id='$id'";
  mysqli_query($conn,$update_sql);
  if($update_sql)
  	// echo "updated successfully";
    echo '<script> window.location.href="meal_list.php";</script>';
  else
  	echo "ERROR";

  ?>
