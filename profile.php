<?php
include_once 'includes/db.php';
include_once 'header.php';

//comment
 ?>
          <style>
body  {
    background-image: url("a.png");

}
</style>          
 <section>
 	
 	<div>
 		<?php
 		if (isset($_SESSION['u_uid'])) {
 			echo "<h2>Welcome to our Patient history</h2>";
 			echo "You are logged in as ".$_SESSION['u_first']." ". $_SESSION['u_last']. "<br>"; 

 			echo "Number: ".$_SESSION['u_number']. "<br>";
 			echo "User Id: ".$_SESSION['u_uid']. "<br><br><br><br>"; 
 			
 		}
 			
 	?>


 		
 	</section>

 	<footer  class="footer" style=" 
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  border-top-width: 145%;
  padding: 1rem;
  font-size: 30px;
 
">
 		 <div class="text">
        <h2>About </h2>
        <hr>
         <h4>Give your doctor news before your visit<h4>
        <br>

       Improving your Health<br> and saving your time 
    </div>


 	</footer>


