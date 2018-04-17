<?php
include_once 'includes/db.php';
include_once 'header.php';
include_once 'login.php';
//comment
 ?>

 <section>
 	
 	<div>
 		<?php
 		if (isset($_SESSION['u_uid'])) {
 			echo "<h2>Welcome to our Patient history</h2>";
 			echo "You are logged in as ".$_SESSION['u_first']." ". $_SESSION['u_last']. "<br>"; 

 			echo "Number: ".$_SESSION['u_number']. "<br>";
 			echo "User Id: ".$_SESSION['u_uid']. "<br>"; 
 			echo '<form  action="includes/history.inc.php" method="POST">
         		  <button type="submit" name="submit">CLICK HERE FOR DETAIL History</button>	

         					</form>';
 

 		}
 			
 	?>
 </div>
 	</section>


<?php

include_once 'footer.php';
?>
