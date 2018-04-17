
<?php
session_start();
if(isset($_POST['submit'])){
	include_once 'login.inc.php';
    include_once 'db.php' ;
		$uid= mysqli_real_escape_string($conn,$_POST['uid']);
		
	}







else{

	header("Location: ../index.php?=NoHistory");
	exit();
}

	?>
		