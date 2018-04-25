<?php
session_start();
include 'includes/db.inc.php';
if(isset($_SESSION['admin_email']))
{

echo '<!DOCTYPE html>
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
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="node_modules\font-awesome\css\font-awesome.min.css">
  <link rel="stylesheet" href="mystyle.css">
  
</head>

<body>
  <div class="top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">

       
          <button class="navbar-toggle navbar-toggle-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>

          </button>
        </div>
        <div id="navbarResponsive" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li >
              <a href="aprofile.php" data-nav-section="home">
                <span>Home</span>
              </a>
              </li>
            
            <li><a href="includes/logout.inc.php" data-nav-section="work" id="navlogin" name="logout"><span>Logout</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    
    <h1> Welcome to Patient Management System</h1>';                     
                          
 

  echo'
  <div class="container">    
  <div class="row">
      <div class="panel panel-primary">
      <div class="panel-heading">  
      <h1>Doctor Profile</h1></div>
       <div class="panel-body">
      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">';
        echo '<div class="profile-pic">';
       echo "<img src='includes/uploads/profiledefault.jpg' class='img-responsive'>";      
    echo '
      </div>
      </div>
      ';
    echo '<div class="span1">
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#viewuser"><span class="glyphicon glyphicon-eye-open"></span><br>View Patient</button>
    <div id="viewuser" class="collapse">
    <form action="view.php" method="POST">
    <input type="text" name="email" placeholder="Enter user email.">
    <button  type="submit" name="finduser">Find</button>
  </form>
  </div>
</div><br>';
   echo'
   <div class="span1">
   <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#deluser"><span class="glyphicon glyphicon-trash"></span><br>Delete Patient</button>
   <div id="deluser" class="collapse">
   <form action="del.php" method="POST">
   <input type="text" name="email" placeholder="Enter email to delete.">
   <button  type="submit" name="delpatient">Delete</button>
 </form>
 </div>
</div><br>
<div class="span1">
<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span>Mailbox</button>
</div>
        </ul>
      </div>
</div>
</div>
</div><br><br>
  ';
  echo '</div>';
  echo '<div class="container-fluid">
  
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
</body>
    

<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="node_modules\popper.js\dist\popper.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="js/register.js"></script>

</body>
</html>';
 }

 else{
     header("Location: ../Patient/alogin.php");
     exit();
 }