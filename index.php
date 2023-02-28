<?php
    if (isset($_POST['submit'])) {
        $dbHost = 'localhost';
        $dbName = 'register';
        $dbUsername = 'root';
        $dbPassword = '';
        $conn = mysqli_connect($dbHost, $dbUsername,$dbPassword, $dbName);
        $email =   $_POST['email'];
        $password =   $_POST['password'];
        $passwordEncryp = md5($password);
        $sql = "SELECT * FROM user WHERE email = '{$email}'" ;
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
            $password=$row['password'];
            if($password===$passwordEncryp){
                session_start();
                $_SESSION['username'] = $row['username'];
                header("location:homepage.php");
            }
            else {
                $errors = "Invalid Password or Email";
            }
        }
        else {
            $errors = "Invalid Password or Email";
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
    <div class="form" >
        <div class="form-box">
           <div class="btn-box">
               <div id="btn"></div>
               <button type="button" class="btn">Login</button>
            </div>
           <!-- <div class="social-icons"> -->
                <!-- <img src="fb.png"> -->
                <!-- <img src="gp.png"> -->
            <!-- </div> -->
            <form id="login"  method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="input-group">
                <i class="fas fa-envelope" id="envelope"></i>
                <input type="text" class="input-field" name="email" placeholder="Email"><br>
                <!-- <?php  if (isset($errors['email'])) { ?> -->
                    <!-- <p id="errEmail" class ="errmsg"><?php echo '&#9888' ; echo $errors['email']?> </p> -->
                <!-- <?php } ?> -->
                <i class="fas fa-lock" id="lock"></i>
                <input type="password" class="input-field" name="password" placeholder="Password" ><br>
                <!-- <?php  if (isset($errors['password'])) { ?> -->
                   <!-- <p id="errPass" class ="errmsg"><br><?php echo '&#9888' ; echo $errors['password']?> </p> -->
                <!-- <?php } ?> -->
                <?php  if(isset($errors)) { ?>
                   <p id="errPass" class ="errmsg"><br><?php echo '&#9888' ; echo $errors ?> </p>
                <?php } ?>
                <!-- <input type="checkbox" class="checkbox"><span>Remember me</span><br> -->
                <button type="submit" class="submit-btn" name="submit">Login</button>
                <p>Don't have an account?<a href="register.php">Register now</a></p>
            </form>
        </div>
    </div>
    </script>
</body>
</html>