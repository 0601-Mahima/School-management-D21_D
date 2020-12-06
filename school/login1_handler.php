<?php
require("db_connect.php");

if(isset($_POST["login"]))
{
$email=$_POST["email"];
// echo $user_name."<br>";

$password=($_POST["password"]);
// echo $password."<br>";
}
$query="SELECT count(*) FROM users WHERE email=$email AND password=$password";
$result = mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if ($count==1) {
  echo '<script> window.location.href="student_list_table.php";</script>';
}
  else{
  printf("Error: %s\n", mysqli_error($conn));
}
?>
