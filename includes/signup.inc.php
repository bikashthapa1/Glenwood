<?php

if (isset($_POST['submit'])) {
		include_once 'db.inc.php';
		$first = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$contact = mysqli_real_escape_string($conn, $_POST['phone']);
		$uid = mysqli_real_escape_string($conn, $_POST['user_id']);
		$pwd = mysqli_real_escape_string($conn, $_POST['password']);

			if(empty($first) || empty($contact) || empty($pwd) || empty($email))
				{
				header("Location: ../body.php?signup=empty");
				exit(); 
			   }
			   else{
			   	//check input characters are valid
					if (!preg_match("/^[a-zA-Z]*$/", $first) ) {
					   	header("Location: ../body.php?signup=invalid");
					   		exit();
					     	} 
					     	else //check valid email
					     	{
					     		

					     			$sql="SELECT * FROM patient WHERE user_id='$uid'";
					     			$result=mysqli_query($conn, $sql);
					     			$resultCheck=mysqli_num_rows($result);
					     			if($resultCheck >0)
					     			{
					     			header("Location: ../body.php?signup=usertaken");
					   					exit();	
					     			}
					     			else{
					     					//hashing the password
					     				 $hashesPw=password_hash($pwd, PASSWORD_DEFAULT);
					     				 //Insert the user into the database
					     			   $sql="INSERT INTO patient(user_id,user_name,user_contact,user_email,user_password) VALUES ('$uid','$first','$contact','$email','$hashesPw' );";
					     				 		mysqli_query($conn, $sql);
					     				 		header("Location: ../success.php?signup=sucess");
					     				 		exit();

					     			}
					     		
					     	}
			   		}

}
else {
	header("Location: ../body.php");
	exit();
    }
?>
