
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

<div class="top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">

              <!--   <a class="navbar-brand" href="index.php">DBMS Project</a> -->
                <button class="navbar-toggle navbar-toggle-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
                
            </button>
            </div>
            <div id="navbarResponsive" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php" data-nav-section="home"><span>Home</span></a></li>


                </ul>
            </div>
        </div>
    </nav>


    <section class="login-info">
        <div class="container">
            <div class="row main">
                <div class="form-header">
                    <h1 class="text-center ">Patient Login </h1>
                </div>
                <div class="main-content">
                    <form action="includes/login.inc.php" id="loginform" method="POST" onsubmit="validateEmail()">
                        <div class="input-group ">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Enter your Email" auto-complete="off" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Enter your Password" auto-complete="off" required>
                        </div>

                        <div class="checkbox">
                            <label class="remember">
                                            <input name="remember" type="checkbox" ><p style="color:antiquewhite;font-size:30px;padding-top:10px;"> Remember Me</p>
                                        </label>
                                        <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
                        </div>

                        <div class="form-group ">
                            <button  name="submit" type="submit" class="btn btn-danger btn-lg btn-block login-button">Login</a>
                        </div>
                 </form>



                </div>
            </div>
        </div>
    </section>



</div>
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
<script src="js/validator.js"></script>
</body>

</html>