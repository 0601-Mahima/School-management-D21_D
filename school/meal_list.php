<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Mid-day Meal Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href="css/submit.css" rel='stylesheet' type='text/css' />
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!----webfonts--->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
  <!---//webfonts--->
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
</head>
<body>
  <div id="wrapper">
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

          <li>
              <a href="#"><i class="fa fa-user fa-fw nav_icon"></i> Students <span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li>
                      <a href="student_list_table.php">Students List</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="#"><i class="fa fa-user fa-fw nav_icon"></i>Attendance<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li>
                      <a href="attendance_list_table.php">Attendance List</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="#"><i class="fa fa-user fa-fw nav_icon"></i>Mid day meal<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li>
                      <a href="meal_list.php">Student List</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="#"><i class="fa fa-user fa-fw nav_icon"></i>Books<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li>
                      <a href="book_list.php">Details</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="index.html"><i class="fa fa-sign-out fa-fw nav_icon"></i>Logout</a>
          </li>
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>

    <div id="page-wrapper">
      <div class="col-md-12 graphs">
        <div class="table-responsive">
          <div class="mytab">
            <h4>Mid-day Meal Details</h4>
          </div>
          <div class="newTable">

            <table id="mytable" class="table table-striped table-bordered">

              <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Roll no</th>
                  <th>Student Name</th>
                  <th>Amount</th>
                  <th>Edit</th>
                </tr>
              </thead>

              <tbody>
                <?php
                require('db_connect.php');

                $query="SELECT * FROM midday_meal";
                $result = mysqli_query($conn,$query);
                if (!$result) {
                  printf("Error: %s\n", mysqli_error($conn));
                  exit();
                }
                $i=1;
                while($row = mysqli_fetch_array($result))
                {
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['roll_no']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                      </div>
                    <td>
                      <form action="edit_meal.php" method="post">
                        <button type="submit" class="btn btn-default fa fa-edit" name="edit" value="<?php echo $row['id']?>"></button>
                      </form>
                    </td>
                  </tr>
                </tr>
                <?php
                $i++;
              }
              ?>
              <div class="add1">
                <form action="add_midday_meal.php"  method="post">
                  <button type="submit" class="btn btn-primary">Add Student</button><br><br>
                </form>
              </div>
            </tbody>

          </table>

        </div>  <!--newTable -->
      </div>   <!-- table-responsive-->
    </div> <!--col-md-12 graphs -->
  </div>  <!--page-wrapper -->
</div> <!--wrapper-->
<link href="css/custom.css" rel="stylesheet">
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
<script>
$(document).ready(function() {
  $('#mytable').dataTable();
} );
</script>

</html>
