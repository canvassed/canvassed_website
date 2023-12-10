<?php

include "../../connect/serverconnect.php";
session_start();

$username = $_POST['username'];
$email = $_SESSION['email'];
$password = $_POST['password'];;
$confirmPassword = $_POST['checkpassword'];;
$pfp = "default.jpg";

if($username == ""){
    header("Location: ../index.php#sign_up_div?response='must have longer username'");
}
else{
    if($password == $confirmPassword && $password != ""){
        
        $finduser = "SELECT * FROM users WHERE user_email = '$email'";
        $getuser = mysqli_query($conn, $finduser);
        if(mysqli_num_rows($getuser) > 0){
            header("Location: ../index.php#sign_up_div?response='email in use'");
        }
        else{
            $createuser = "INSERT INTO `users`(`user_name`, `user_email`, `user_pfp`, `user_password`) VALUES ('$username','$email','$pfp','$password')";
            mysqli_query($conn, $createuser);
            
            $finduser = "SELECT * FROM users WHERE user_email = '$email'";
            $getuser = mysqli_query($conn, $finduser);
            while($row = mysqli_fetch_assoc($getuser)){
                $info = array();
                array_push($info, array("id"=>$row['user_id']));
            }
            

        }
        
    }
    else{
        header("Location: ../index.php#sign_up_div?response='passwords do not match'");
    }
}