

<?php
session_start();
  if(isset($_POST['submit']))
{
	include_once 'db.php';
	$disease = mysqli_real_escape_string($conn, $_POST['disease']);
	$symptoms = mysqli_real_escape_string($conn, $_POST['symptoms']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);


  if(empty($disease) || empty($username))
				{
				header("Location: ../history.php?history=empty");
				exit(); 
			   }
	else{
		             $sql="INSERT INTO history (disease, symptoms, username) VALUES ('$disease','$symptoms', '$username');";
					     				 		mysqli_query($conn, $sql);
					     				 		header("Location: ../history.php?history=recorded");
					     				 		exit();	
					     				 		 
         }
     }

        
   else {
	header("Location: ../history.php");
	exit();
    }

?>