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
               <button type="button" class="toggle-btn" onclick="login()">Login</button>
            </div>
           <div class="social-icons">
                <img src="fb.png">
                <img src="gp.png">
            </div>
            <form id="login"  action="login.php" method="post" class="input-group">
                <i class="fas fa-user-circle" id="user-circle"></i>
                <input type="text" class="input-field" placeholder="Username" required><br>
                <i class="fas fa-lock" id="lock"></i>
                <input type="password" class="input-field" placeholder="Password" required><br>
                <input type="checkbox" class="checkbox"><span>Remember me</span><br>
                <button type="submit" class="submit-btn">Login</button>
                <p>Don't have an account?<a href="register.php">Register now</a></p>
            </form>
        </div>
    </div>
    </script>
</body>
</html>