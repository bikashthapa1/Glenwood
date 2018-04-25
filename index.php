
<?php 
require 'includes/db.inc.php';
session_start();
?>

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
    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet" href="node_modules\font-awesome\css\font-awesome.min.css"> -->
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>
<div class="top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- <a class="navbar-brand" href="#">DBMSProject</a> -->
                <button class="navbar-toggle navbar-toggle-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
            
        </button>
            </div>
            <div id="navbarResponsive" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
                    <li><a href="#login" data-nav-section="work" id="navlogin"><span>Login</span></a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container box" id="home">
        <h1>Glendwood Hospital</h1>
        <p>Patient Management System</p>
    </div>

    
    <div class="container next" id="arrow">
        <a href="#login">
        <i class="fa fa-angle-double-down fa-lg" aria-hidden="true">Login</i>
    </a>
    </div>
</div>


    <section id="login">
        <div class="container">
            <div class="row">   
                <div class="col-sm-4" id="emplogin">
                    <div class="thumbnail">
                        <img src="images/3.jpg" alt="Patientlogin" class="img-responsive" />
                        <div class="caption">
                            <h3>Pateint Login</h3>
                            <p align="center"><a href="plogin.php" class="btn btn-primary btn-danger">Login</a>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4" id="adlogin">
                    <div class="thumbnail">
                        <img src="images/4.png" alt="Doctorlogin" class="img-responsive" />
                        <div class="caption">
                            <h3>Doctor Login</h3>
                            <p align="center"><a href="alogin.php" class="btn btn-primary btn-danger">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" id="registration">
                    <div class="thumbnail">
                        <img src="images/2.png" alt="Registration" class="img-responsive" />
                        <div class="caption">
                            <h3>Are you an new Patient?</h3>
                            <p align="center"><a href="registration.php" class="btn btn-primary btn-danger">Sign Up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <footer>
                <div class="row">
                        
                          <div class="col-lg-12">
                            <div class="col-md-7">
                              <a href="#">Terms of Service</a> | <a href="#">Privacy</a>    
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
</body>

</html>