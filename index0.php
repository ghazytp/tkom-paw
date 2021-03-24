<?php
require_once 'warn/init.php';
    if (isset($_POST['signup'])) {
        $name = $_POST ['name'];
        $email = $_POST ['email']; 
        $pass = $_POST ['pass'];
        $re_pass = $_POST ['re_pass'];


        if (!empty(trim($name)) && !empty(trim($email)) && !empty(trim($pass))) {
            if (register($name,$email)) {
                if (registering($name,$email,$pass)) {
                    $success = '<div class="alert alert-success text-center"><h6>Registration successful! <a style="color:#a46de8;" class="link" href="signin.php">Click here to sign in</a></h6></div><hr style="border-top: 1px solid white; filter:drop-shadow(1px 1px 1px grey);">';
                }
                else { $fail = '<div class="alert alert-danger text-center"><h6>Registration Failed! There is something wrong in our side, please try again later!</h6></div><hr style="border-top: 1px solid white; filter:drop-shadow(1px 1px 1px grey);">';
                }
            } else {
            $already = '<div class="alert alert-warning text-center"><h6>Oops! an account with that username or email already exist in our database</h6></div><hr style="border-top: 1px solid white; filter:drop-shadow(1px 1px 1px grey);">';
        }
        } 
    }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index1.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>