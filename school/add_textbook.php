<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Textbook details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/submit.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
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
            <!-- /.navbar-static-side -->

        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Textbook</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="add_textbook_handler.php" method="post">
               <label class="col-sm-2 control-label">Book_id:</label>
								<div class="col-sm-8">
                  <input type="text" class="form-control1" name="book_id" id="focusedinput" placeholder="Book id">
                </div><br><br><br>
								<div class="form-group">
								<label class="col-sm-2 control-label">Subject:</label>
								<div class="col-sm-8">
									<select  name="subject" class="form-control1">
										<option>Social studies</option>
										<option>Science</option>
										<option>Maths</option>
										<option>English</option>
										<option>Kannada</option>
										<option>Hindi</option>
									</select>
								</div>
								</div>



              <div class="panel-body">
                          <div class="form-group">
        									<label class="col-sm-2 control-label">Class:</label>
        									<div class="col-sm-8">
        										<select  name="class" class="form-control1">
        											<option>1</option>
        											<option>2</option>
        											<option>3</option>
        											<option>4</option>
        											<option>5</option>
        											<option>6</option>
        											<option>7</option>
        											<option>8</option>
        											<option>9</option>
        											<option>10</option>
        										</select>
        									</div>
        								</div>


									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Roll Number:</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="roll_no" id="focusedinput" placeholder="Student ID">
										</div><br>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">
											issue_date:</label>
										<div class="col-sm-8">
											<input type="date" class="form-control1" name="issued" id="focusedinput" placeholder="dd/mm/yyyy">
										</div><br>
									</div>
									</div>
									<div class="panel-footer">
								<div class="row1">
										<button type="submit" name="submit" class="btn-success btn">Submit</button>
									</form>
										<div class="row2">
											<form action="book_list.php" method="post">
										<button class="btn-inverse btn">Cancel</button>
									</form>
									</div>
							 </div>
							</div>

                </div>
                <!-- /#page-wrapper -->
             </div>
					 </div>
					 </div>
              <!-- /#wrapper -->
          <!-- Nav CSS -->
          <link href="css/custom.css" rel="stylesheet">
          <!-- Metis Menu Plugin JavaScript -->
          <script src="js/metisMenu.min.js"></script>
          <script src="js/custom.js"></script>
          </body>
          </html>
