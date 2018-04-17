<?php
session_start();
if(isset($_POST['submit'])){
 	include_once 'db.php' ;
		$uid= mysqli_real_escape_string($conn,$_POST['uid']);
		$pwd= mysqli_real_escape_string($conn,$_POST['pwd']);

	//Error if empty($uid) || empty($pwd))
		if(empty($uid) || empty($pwd))
				{
				header("Location: ../signup.php?signup=empty");
				exit(); 
			   }
				
			else
			{
				$sql="SELECT * FROM users WHERE user_uid='$uid'";
				$result=mysqli_query($conn, $sql);
			 	$resultCheck=mysqli_num_rows($result);
				if ($resultCheck<1) {
					header("Location: ../index.php?=loginerror");
					exit();
					
				} else
				    {
 						if ($row=mysqli_fetch_assoc($result)) {
 							$hashedPw=password_verify($pwd, $row['user_pwd']);
 								if ($hashedPw==false) {
 									
 									header("Location: ../index.php?=loginerro");
									exit();
 								}
 								elseif ($hashedPw==true) {
 									//Login in the user here
 									$_SESSION['u_id']=$row['user_id'];
 									$_SESSION['u_first']=$row['user_first'];
 									$_SESSION['u_last']=$row['user_last'];
 									$_SESSION['u_number']=$row['user_number'];
 									$_SESSION['u_uid']=$row['user_uid'];
 									header("Location: ../index.php?=loginsuccess");
									exit();

 								}
 						}
				   }
			}
}
else{

	header("Location: ../index.php?=loginerrr");
	exit();
}


?>
