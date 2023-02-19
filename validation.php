<?php 
    if (isset($_POST["submit"])) { 
        
       $userName =  $_POST['username'];
        $email =   $_POST['email'];
        $password =   $_POST['password'];
        $rePassword =   $_POST['re-password'];
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        if(empty($userName)){
            $error_userName = "Username is mandatory.";
        }
        if (empty($email)) {
            $error_email = "Email is mandatory.";
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = "Email is not valid.";
        }
        if (empty($password)) {
            $error_password = "Password is mandatory.";   
        }
        elseif (strlen($password) < 8 ) {
            $error_password = "Password must be at least 8 characters.";   
        }
        if ($password != $rePassword) {
            $error_rePassword = "Password doesn't match.";
        }
        include('register.php');
    }
?>