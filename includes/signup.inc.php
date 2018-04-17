<?php

if (isset($_POST['submit'])) {
		include_once 'db.php';
		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$number = mysqli_real_escape_string($conn, $_POST['number']);
		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

			if(empty($first) || empty($last) || empty($number) || empty($uid) || empty($pwd))
				{
				header("Location: ../signup.php?signup=empty");
				exit(); 
			   }
			   else{
			   	//check input characters are valid
					   		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ) {
					   		header("Location: ../signup.php?signup=invalid");
					   		exit();
					     	} 
					     	else //check valid email
					     	{
					     		if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $number)) {
					     			header("Location: ../signup.php?signup=invalidNumber");
					   			    exit();
					     		}
					     		else
					     		{

					     			$sql="SELECT * FROM users WHERE user_uid='$uid'";
					     			$result=mysqli_query($conn, $sql);
					     			$resultCheck=mysqli_num_rows($result);
					     			if($resultCheck >0)
					     			{
					     			header("Location: ../signup.php?signup=usertaken");
					   					exit();	
					     			}
					     			else{
					     					//hashing the password
					     				 $hashesPw=password_hash($pwd, PASSWORD_DEFAULT);
					     				 //Insert the user into the database
					     			   $sql="INSERT INTO users(user_first,user_last, user_number, user_uid, user_pwd) VALUES ('$first','$last', '$number','$uid','$hashesPw' );";
					     				 		mysqli_query($conn, $sql);
					     				 		header("Location: ../signup.php?signup=sucess");
					     				 		exit();

					     			}
					     		}
					     	}
			   }

}
else {
	header("Location: ../signup.php");
	exit();
    }
?>
