<!DOCTYPE HTML>
<html>
<head>
<title>Faculty</title>
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
</head>
<body>

    <div class="graphs">
   <div class="xs">
       <h3>Faculty</h3>
         <div class="tab-content">
        <div class="tab-pane active" id="horizontal-form">
          <form class="form-horizontal" action="add_faculty_handler.php" method="post">
            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Faculty ID:</label>
              <div class="col-sm-8">
                <input type="text" name="faculty_id" class="form-control1"  id="focusedinput" placeholder="Faculty ID">
              </div><br><br><br>
            </div>
            <label for="focusedinput" class="col-sm-2 control-label">Faculty Name:</label>
            <div class="col-sm-8">
              <input type="text" name="fname" class="form-control1"  id="focusedinput" placeholder="Faculty name">
            </div><br><br><br>

            <div class="form-group">
              <label for="smallinput" class="col-sm-2 control-label label-input-sm">Phone Number:</label>
              <div class="col-sm-8">
                <input type="text" name="phone_no" class="form-control1 input-sm"  id="smallinput" placeholder="Phone Number">
              </div>
            </div>
            <div class="panel-body">
          						<div class="form-group">
          							<label class="col-md-2 control-label">Email Address</label>
          							<div class="col-md-8">
          								<div class="input-group">
          									<span class="input-group-addon">
          										<i class="fa fa-envelope-o"></i>
          									</span>
          									<input type="text" name="email" class="form-control1" placeholder="Email Address">
          								</div>
          							</div>
          						</div>
                  </div>
                  <label for="focusedinput" class="col-sm-2 control-label">Password:</label>
                  <div class="col-sm-8">
                    <input type="password" name="password" class="form-control1"  id="focusedinput">
                  </div><br><br><br>

                </div>
              </div>
              <div class="panel-footer">
            <div class="row1">
                <button type="submit" name="submit" class="btn-success btn">Submit</button>
              </form>
                <div class="row2">
                  <form action="index.html" method="post">
                <button class="btn-inverse btn">Cancel</button>
              </form>
              </div>
           </div>
          </div>
          </div>
        </div>
      <!-- Nav CSS -->
      <link href="css/custom.css" rel="stylesheet">
      <!-- Metis Menu Plugin JavaScript -->
      <script src="js/metisMenu.min.js"></script>
      <script src="js/custom.js"></script>
      </body>
      </html>
