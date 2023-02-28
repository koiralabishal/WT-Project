<?php 
    if (isset($_POST["submit"])) { 
      $dbHost = 'localhost';
      $dbName = 'register';
      $dbUsername = 'root';
      $dbPassword = '';
      $conn = mysqli_connect($dbHost, $dbUsername,$dbPassword, $dbName);
      $userName =  $_POST['username'];
      $email =   $_POST['email'];
      $password =   $_POST['password'];
      $rePassword =   $_POST['re-password'];
      $passwordHash = md5($password);
      $errors = array();
      $sql = "SELECT * FROM user WHERE email = '{$email}'" ;
      $sql1 = "SELECT * FROM user WHERE username = '{$userName}'" ;
      $result = mysqli_query($conn, $sql);
      $result1 = mysqli_query($conn, $sql1);

      if (empty($email)) {
         $errors['email']= "Email is mandatory.";
      }
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $errors['email'] = "Email is not valid."; 
      }
      elseif (mysqli_num_rows($result)>0) {
         $errors['email'] = "Email is already exist" ; 
      }
      
    
      if(empty($userName)){
         $errors['username'] = "Username is mandatory.";
      } 
      elseif (mysqli_num_rows($result1)>0) {
        $errors['username']= "Username is already exist"  ; 
      }

      if (empty($password)) {
         $errors['password']  = "Password is mandatory.";   
      }
      elseif (strlen($password) < 8 ) {
         $errors['password']  = "Password must be at least 8 characters.";   
      }
      if ($password != $rePassword) {
         $errors['re-password'] = "Password doesn't match.";
      }

      if (count($errors)==0){
         $query = "INSERT INTO user(username,email,password) VALUES('{$userName}', '{$email}', '{$passwordHash}')"; 
         if (mysqli_query($conn, $query)) {
               $success_msg = "Hello! $userName, You have registered successfully.";
         }
         else {
            echo "Something is wrong.";
         }
      }
    }
?>

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
               <button type="button" class="btn" >Register</button>
           </div>
            <!-- <div class="social-icons"> -->
                <!-- <img src="fb.png"> -->
                <!-- <img src="gp.png"> -->
            <!-- </div> -->
                <form id="register"  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="input-group">
                <i class="fas fa-user-circle" id="user-circle"></i>
                <input type="text"  class="input-field" placeholder="Username" name="username" value = "<?=(isset($userName))?$userName:''?>"></br>
                 <?php  if (isset($errors['username'])) { ?>
                   <P id="errmsg_user" class = "errmsg" ><?php echo '&#9888' ; echo $errors['username'] ;?> </p>
                <?php } ?>
                <i class="fas fa-envelope" id="envelope"></i><br>
                <input type="text"  class="input-field" placeholder="Email" name="email" value = "<?=(isset($email))?$email:''?>"></br>
                <?php  if (isset($errors['email'])) { ?>
                   <P id="errmsg_email" class = "errmsg" ><?php echo '&#9888' ; echo $errors['email']?> </p>
                <?php } ?>
                <i class="fas fa-lock" id="lock2"></i><br>
                <input type="password"  class="input-field" id="pw" placeholder="Password" name="password" ></br>
                 <?php  if (isset($errors['password'])) { ?> 
                   <p id="errmsg_pw" class = "errmsg" ><?php echo '&#9888' ; echo $errors['password']?> </p>
                <?php } ?>
                <i class="fas fa-lock" id="lock3"></i><br>
                <input type="password"  class="input-field" placeholder="Re-password" name="re-password"></br>
                <?php  if (isset($errors['re-password'])) { ?>
                   <p id="errmsg_rePw" class = "errmsg" ><?php echo '&#9888' ; echo $errors['re-password']?> </p>
                <?php } ?>
                <input type="checkbox" class="checkbox" required><span>I agree to the terms & conditions.</span><br>
                <button type="submit" class="submit-btn" name="submit">Register</button>
                <p>Already have an account?<a href="index.php">Login now</a></p><br>
                <?php  if (isset($success_msg)) { ?>
                   <p class ="success-msg"><?php echo $success_msg?> </p>
                <?php } ?>
            </form>
            
        </div>
    </div>
    </script>
</body>
</html>