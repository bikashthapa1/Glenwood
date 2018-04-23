<?php


if(isset($_POST['submit']))
{
    include 'db.inc.php';
    session_start();

    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $pass=mysqli_real_escape_string($conn, $_POST['password']);

    $sql="SELECT *FROM patient where email='$email'";
    $result= mysqli_query($conn, $sql);
    $resultCheck= mysqli_num_rows($result);
    if($resultCheck<1)
      {
        header("Location: ../plogin.php?LoginError");
        exit();
    }
    else
    {
        if($row = mysqli_fetch_assoc($result)){
            $hashedPwdCheck = password_verify($pass,$row['pass']);
            if($hashedPwdCheck == false){
                header("Location: ../plogin.php?LoginError");
                exit();
            }
            elseif($hashedPwdCheck == true){
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['user_email']= $row['user_email'];
                $_SESSION['user_name']= $row['user_name'];
                $_SESSION['user_contact']= $row['user_contact'];
                header("Location: ../profile.php");
                exit();
                
            }
        }
    }
}
else{
    header("Location: ../plogin.php?LoginError");
    exit();
}