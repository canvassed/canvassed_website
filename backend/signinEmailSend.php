<?php

include "../../connect/serverconnect.php";
session_start();

$email = $_POST['email'];
$_SESSION['email'] = $email;

$finduser = "SELECT * FROM users WHERE user_email = '$email'";
$getuser = mysqli_query($conn, $finduser);
if(mysqli_num_rows($getuser) > 0){
    header("Location: ../index.php#sign_up_div?response='email in use'");
}
else{
    //email does not exist
    $headers .= "Return-Path: canvassed.net <admin@canvassed.net>\r\n"; 
    $headers .= "From: canvassed.net <admin@canvassed.net>\r\n";  
    $headers .= "Organization: canvassed.net\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
    
    $realcode = random_int(100000,999999);
    
    mail($email, "verifcation", "use this code ".$realcode." to verify your email adress \n\n thank you \n\n canvassed.net", $headers);
    header("Location: ../index.php#account_div");
}