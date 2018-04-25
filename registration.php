
  <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IE-edge">
  <title>Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Patient Management website" />
  <meta name="keywords" content="Patient" />
  <meta name="author" content="Author" />
  <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap-theme.min.css">
  <link rel="stylesheet" href="css\animate.css">
  <link rel="stylesheet" href="node_modules\font-awesome\css\font-awesome.min.css">
  <link rel="stylesheet" href="mystyle.css">
</head>

<body>
  <div class="top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">

         <!--  <a class="navbar-brand" href="index.php">DBMS Project</a> -->
          <button class="navbar-toggle navbar-toggle-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>

          </button>
        </div>
        <div id="navbarResponsive" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="index.php" data-nav-section="home">
                <span>Home</span>
              </a>
            </li>


          </ul>
        </div>
      </div>
    </nav>


    <div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Enter Your Details Here
			</div>
			<div class="panel-body">
				<form name="myform" action="includes/register.php" method="post">
					<div class=" form-group">
						<label for="myName">Name *</label>
						<input id="myName" name="myName" class="form-control" type="text" required>
						<span id="error_name" class="text-danger"></span>
					</div>
          <div class="col-md-6 form-group">
						<label for="pwd">Password*</label>
						<input id="pwd" name="pwd" class="form-control" type="password" required>
						<span id="error_pwd" class="text-danger"></span>
					</div>
          <div class="col-md-6 form-group">
						<label for="confirmpwd">Confirm Password *</label>
						<input id="confirmpwd" name="confirmpwd" class="form-control" type="password" required>
						<span id="error_confirmpwd" class="text-danger"></span>
					</div>
					<div class="col-md-6 form-group">
						<label for="email">Email *</label>
						<input id="email" name="email" class="form-control" type="text" required>
						<span id="error_email" class="text-danger"></span>
					</div>
					
					<div class="col-md-6 form-group">
						<label for="dob">Date of Appointment *</label>
						<input type="date" name="dob" id="dob" class="form-control" required>
						<span id="error_dob" class="text-danger"></span>
					</div>
					<div class="col-md-6 form-group">
						<label for="gender">Gender*</label>
						<select name="gender" id="gender" class="form-control">
							<option selected>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					<div class="col-md-6 form-group">
						<label for="phone">Phone Number *</label>
						<input type="tel" id="phone" name="phone" class="form-control" required>
						<span id="error_phone" class="text-danger"></span>
					</div>
					<div class=" form-group">
						<label for="history">Past History *</label>
						<textarea rows="3" id="history" name="history" class="form-control" type="text" required></textarea>
						<span id="error_history" class="text-danger"></span>
					</div>
          
					
					<button id="submit" name="submit" type="submit" value="submit" class="btn btn-primary center">Submit</button>
			
				</form>

			</div>
		</div>
	</div>
</div>


  </div>
  <div class="container-fluid">
    <footer>
      <div class="row">

        <div class="col-lg-12">
          <div class="col-md-7">
            <a href="#">Terms of Service</a> |
            <a href="#">Privacy</a>
          </div>
          <div class="col-md-5">
            <p class="muted pull-right">© 2017 Author. All rights reserved</p>
          </div>
        </div>
      </div>
  </div>
  </footer>
  </div>


  <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="node_modules\popper.js\dist\popper.min.js"></script>
  <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
  <script src="js/myscript.js"></script>
  <script src="js/register.js"></script>
</body>

</html>