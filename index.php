<?php

session_start();
//include_once("../connect/serverconnect.php");

$userid = $_SESSION['user_id'];
$username = "test";
$useremail = "test";
$userbio = "test";


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>canvassed</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="icon" href="./smalllogo.jpg" type="image/x-icon">
        <script src="./script.js"></script>
    </head>
    <body>
        <nav>
            <li>canvassed</li>
            <li><a href="#what_is_div"><button id="what_is_button" class="nav_buttons" onclick="switchNavButtonColor('what_is_button')">what is canvassed</button></a></li>
            <li><a href="#sign_up_div"><button id="sign_up_button" class="nav_buttons" onclick="switchNavButtonColor('sign_up_button')">sign up</button></a></li>
            <li><a href="#account_div"><button id="account_button" class="nav_buttons" onclick="switchNavButtonColor('account_button')">account</button></a></li>
            <li><a href="#contact_div"><button id="contact_button" class="nav_buttons" onclick="switchNavButtonColor('contact_button')">contact us</button></a></li>
            <li><a href="#socials_div"><button id="socials_button" class="nav_buttons" onclick="switchNavButtonColor('socials_button')">social media accounts</button></a></li>
        </nav>
        <div id="main">
            <div id="what_is_div" class="main_div">
                <div class="left_column">
                    <div class="inner_colomn_container">
                        <h1>what is canvassed?</h1>
                        <p class="column_info">canvassed is an app created to allow people to express their opinions on any topics</br></br>we do not like to discuss politics because of the polarizing views some people can have. therefore, we are only sticking to appropriate light debate topics.</p>
                        <p>download here</p>
                    </div>
                </div>
                <div class="right_column">
                    <img src="./images/homepage.png" height="600">

                </div>
            </div>
            <div id="sign_up_div" class="main_div">
                <div class="left_column">
                    <div class="inner_colomn_container">
                        <h1 onclick="openLogin()">login</h1>
                        <p>or</p>
                        <h1 onclick="openSignUp()">create account</h1>
                    </div>
                </div>
                <div class="right_column">
                    <div id="login_form">
                        <form>
                            <input placeholder="email">
                            <input placeholder="password">
                            <button class="form_button">login</button>
                        </form>
                    </div>
                    <div id="create_account_form">
                        <form>
                            <input placeholder="email">
                            <button class="form_button">send confirmation email</button>
                            <input placeholder="user name">
                            <input placeholder="password">
                            <input placeholder="confirm password">
                            <input placeholder="email confirmation code">
                            <button class="form_button">sign up</button>
                        </form>
                    </div>
                </div>
                
                
            </div>
            <div id="account_div" class="main_div">
                <div class="left_column">
                    <div class="inner_colomn_container">
                        <h1>your account</h1>
                        <p>manage your account from here or the app</p>
                    </div>
                </div>
                <div class="right_column">
                    <div class="inner_colomn_container">
                        <div id="account_info_div">
                            <img src="" width="50" height="50">
                            <p><?php echo $username;?></p>
                            <p><?php echo $userbio;?></p>
                            <p>no one signed in yet</p>
                        </div>
                        <div id="extra_account_info_div">
                            <p><?php echo $useremail;?></p>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div id="contact_div" class="main_div">
                <div class="left_column">
                    <div id="inner_column_container">
                        <h1>contact us</h1>
                        <p>email</br>admin@canvassed.net</p>
                        <p>make suggestions on our app</p>
                    </div>
                </div>
                <div class="right_column">
                    <img src="./images/suggestionpage.png" height="600">
                </div>
                
            </div>
            <div id="socials_div" class="main_div">
                <p>follow us on our social media accounts</p>
                <ul>
                    <li>canvassed</li>
                    <li>instagram</li>
                    <li>youtube</li>
                    <li>tiktok</li>
                </ul>
            </div>
            
        </div>
    </body>
</html>