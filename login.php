<?php
    if (isset($_POST['submit'])) {
        include('dbConnect.php');
        $email =   $_POST['email'];
        $password =   $_POST['password'];
        $passwordEncryp = md5($password);
        $sql = "SELECT * FROM users WHERE email = '{$email}'" ;
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
            $password=$row['password'];
            if($password===$passwordEncryp){
                session_start();
                $_SESSION['username'] = $row['username'];
                header("location:dashboard.php");
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
        <div class="form-box" id="login-form-box">
           <div class="btn-box">
               <div id="btn"></div>
               <button type="button" class="btn">Login</button>
            </div>
            <form id="login"  method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="input-group">
                <i class="fas fa-envelope" id="envelope"></i>
                
                <input type="text" class="input-field" name="email" placeholder="Email"><br>
               
                <span id="eye" onclick = "myFunction()">
                    <i class="fas fa-eye" id="hide1"></i>
                    <i class="fas fa-eye-slash" id="hide2"></i>
                </span>

                <i class="fas fa-lock" id="lock"></i>

                <input type="password" class="input-field" name="password" placeholder="Password" id="pw"><br>
                
                <?php  if(isset($errors)) { ?>
                   <p class ="errmsg"><br><?php echo '&#9888' ; echo $errors ?> </p>
                <?php }?>
                
                <button type="submit" class="submit-btn" name="submit">Login</button>
                
                <p id="change-form-register">Don't have an account?<a href="register.php">Register now</a></p>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>