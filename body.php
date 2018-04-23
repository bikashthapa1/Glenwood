<?php
require 'header.php';

?>
<body>
  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Glenwood Hospital</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="https://www.glenwoodregional.org/">About Us</a></li>  
      <li><a href="#login">Login</a></li>
        <li><a href="#login">Sign Up</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="top">
 <div class="frame3">
 <p style="padding: 70px 70px 10px 70px;font-size: 42px;">Welcome To Glenwood's</p> <br><p style="font-size: 42px; padding: 0px 0px 0px 170px;"> Patient Portal</p>
 </div>
</div>




<section  id="login">
  <div class="container">
    <div class="row">
      <div class="col-sm-4" id="emplogin">
        <div class="thumbnail">
          <img src="images/patient.png" alt="Patientlogin" class="img-responsive" />
          <div class="caption">
            <h3 style="padding-left: 90px;">Patient Login</h3>
            <p class="desc">Patients can login and view about ther disease history,follow-up routines and previous diagnostic results..</p>
            <p align="center">
              <button type="button" class="btn btn-info btn-lg btn-danger" data-toggle="modal" data-target="#pModal">Login</button>
            </p>
          </div>
        </div>

      </div>
      <div class="col-sm-4" id="adlogin">
        <div class="thumbnail">
          <img src="images/doctor.png" alt="Adminlogin" class="img-responsive" />
          <div class="caption">
            <h3 style="padding-left: 90px">Doctor Login</h3>
            <p class="desc">Doctors can login and update the patient details such as disease, symtoms, previous check-ups, and others.</p>
            <p align="center">
              <button type="button" class="btn btn-info btn-lg btn-danger" data-toggle="modal" data-target="#dModal">Login</button>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4" id="registration">
        <div class="thumbnail">
          <img src="images/signup.png" alt="Registration" class="img-responsive" />
          <div class="caption">
            <h3>Are you a Patient?</h3>
            <p class="desc">Sign up to manage your history and see all your information related to your previous check-up and diseases.<p>
            <p align="center">
              <button type="button" class="btn btn-info btn-lg  btn-danger" data-toggle="modal" data-target="#sModal">Sign Up</button>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--patient login modal -->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="pModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Patient Login</h4>
        </div>
        <div class="modal-body">
          <form action="includes/plogin.inc.php" id="ploginform" method="POST" onsubmit="validateEmail()">
            <label for="email">Email: </label> <input type="email" name="email" placeholder="Enter your email address." required> <br>
            <label for="password">Password</label> <input type="text" name="password" placeholder="Enter your password." required><br>
            <button type="submit">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!--doctor login modal -->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="dModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Doctor Login</h4>
        </div>
        <div class="modal-body">
          <form>
            <label for="email">Email: </label> <input type="email" name="email" placeholder="Enter your email address." required> <br>
            <label for="password">Password</label> <input type="text" name="password" placeholder="Enter your password." required><br>
            <button type="submit">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!--patient signup modal -->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="sModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
          <form action="includes/signup.inc.php" method="POST">
            <label for="name">Name: </label> <input type="text" name="name" placeholder="Enter your name." required><br>
            <label for="phone">Contact no: </label> <input type="number" name="phone" placeholder="Enter your contact number"><br>
            <label for="email">Email: </label> <input type="email" name="email" placeholder="Enter your email address." required> <br>
            <label for="password">Password: </label> <input type="text" name="password" placeholder="Enter your password." required><br>
            <button type="submit" name="submit">Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<footer>
<div class="container">
  <p class="pull-right" style="font-size: 16px;padding: 10px;">Thank you for visiting us.<br>Glenwood &#169;2018</p>
  </div>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>
<script>
$('.smooth').on('click', function() {
    $.smoothScroll({
        scrollElement: $('body'),
        scrollTarget: '#' + this.id
    });
    
    return false;
});
</script>
</body>

</html>