<?php
include_once 'includes/db.php';
include_once 'header.php';

 ?>

 <section>
 	<div class="container">
	 	<p> Sign up for New Patient</p>
	 	<p>You will be always remebered by us!!!!</p>
		 	<form class="signup-form" action="includes/signup.inc.php" method="post">
			 	 Firstname:<input type="text" name="first"  placeholder="Firstname">
			 	Lastname <input type="text" name="last"  placeholder="Lastname"><br>
			 	Phone Number: <input type="text" name="number"  placeholder="(***)-(***)-(****)">	<br>
			 	 Username:<input type="text" name="uid"  placeholder="Username">	<br>
			 	 Password:<input type="Password" name="pwd"  placeholder="Password">	<br>
			 	 <button type="submit" name='submit'>Sign up</button>
		 	</form>
	   		
	   	</div>
 	</section>



