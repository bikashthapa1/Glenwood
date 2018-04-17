<?php
include_once 'includes/db.php';
include_once 'header.php';
 ?>

<nav>
         			<div clas="main-wrapper">
         				
         				<div clas="navlogin" style="float: right;">
                        
                        <?php 
                        if (isset($_SESSION['u_id'])) {
                           echo '<form action="includes/logout.inc.php" method="POST">
                           <button type="submit" name="submit">Logout</button>

                           </form>';
                           }
                      else
                      { echo'
         					<form  action="includes/login.inc.php" method="POST">
         						   <input type="text" name="uid"  placeholder="Username or e-mail">
         							<input type="password" name="pwd" placeholder="Enter password">
         							<button type="submit" name="submit">Login</button>	

         					</form>
         					<a href="signup.php"> Sign up</a>';
                     }?>
         					
         				</div>
         			
         			</div>
                  
         		</nav>
               
