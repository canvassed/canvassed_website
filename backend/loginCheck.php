<?php

include "../../connect/serverconnect.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$finduser = "SELECT * FROM users WHERE user_email = '$email'";
$getuser = mysqli_query($conn, $finduser);
if(mysqli_num_rows($getuser) > 0){
    while($row = mysqli_fetch_assoc($getuser)){
        if($row['user_password'] == $password){
            $_SESSION['user_id'] == $row['user_id'];
        }
        else{
            header("Location: ../index.php#sign_up_div?response='incorrect password'");
        }
    }
}
else{
    header("Location: ../index.php#sign_up_div?response='email not found'");
}

header("Location: ../index.php#account_div");