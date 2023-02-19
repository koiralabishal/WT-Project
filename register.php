

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration And Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style.php">
</head>
<body>
    <div class="form">
   
        <div class="form-box">
           <div class="btn-box">
               <div id="btn"></div>
               <button type="button" class="toggle-btn" >Register</button>
           </div>
           <div class="social-icons">
                <img src="fb.png">
                <img src="gp.png">
            </div>
                <form id="register"  method="post" action="validation.php" class="input-group">
                <i class="fas fa-user-circle" id="user-circle"></i>
                <input type="text"  class="input-field" placeholder="username" name="username" value = "<?php echo $userName;?>"></br>
                <?php  if (isset($error_userName)) { ?>
                   <P id="errmsg_user" class = "errmsg" ><?php echo '&#9888' ; echo $error_userName ;?> </p>
                <?php } ?>
                <i class="fas fa-envelope" id="envelope"></i><br>
                <input type="text"  class="input-field" placeholder="Email" name="email" value = "<?php  echo  $email; ?>"></br>
                <?php  if (isset($error_email)) { ?>
                   <P id="errmsg_email" class = "errmsg" ><?php echo '&#9888' ; echo $error_email?> </p>
                <?php } ?>
                <?php  if (isset($msg)) { ?>
                   <P id="errmsg_email" class = "errmsg" ><?php echo '&#9888' ; echo $msg?> </p>
                <?php } ?>
                <i class="fas fa-lock" id="lock2"></i><br>
                <input type="password"  class="input-field" id="pw" placeholder="password" name="password"></br>
                <?php  if (isset($error_password)) { ?>
                   <P id="errmsg_pw" class = "errmsg" ><?php echo '&#9888' ; echo $error_password?> </p>
                <?php } ?>
                <i class="fas fa-lock" id="lock3"></i><br>
                <input type="password"  class="input-field" placeholder="Re-password" name="re-password"></br>
                <?php  if (isset($error_rePassword)) { ?>
                   <p id="errmsg_rePw" class = "errmsg" ><?php echo '&#9888' ; echo $error_rePassword?> </p>
                <?php } ?>
                <input type="checkbox" class="checkbox" required><span>I agree to the terms & conditions.</span><br>
                <button type="submit" class="submit-btn" name="submit">Register</button>
                <p>Already have an account?<a href="login.php">Login now</a></p><br>
                <?php  if (isset($success_msg)) { ?>
                   <p><?php echo $success_msg?> </p>
                <?php } ?>
            </form>
            
        </div>
    </div>
    </script>
</body>
</html>