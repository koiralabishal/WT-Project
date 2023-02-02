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
               <button type="button" class="toggle-btn" onclick="register()">Register</button>
           </div>
           <div class="social-icons">
                <img src="fb.png">
                <img src="gp.png">
            </div>
            <form id="register"  method="post" action="" class="input-group">
                <i class="fas fa-user-circle" id="user-circle"></i>
                <input type="text"  class="input-field" placeholder="Username" required></br>
                <i class="fas fa-envelope" id="envelope"></i>
                <input type="email"  class="input-field" placeholder="Email" required></br>
                <i class="fas fa-lock" id="lock2"></i>
                <input type="password"  class="input-field" id="pw" placeholder="Password" required></br>
                <i class="fas fa-lock" id="lock3"></i>
                <input type="password"  class="input-field" placeholder="Re-password" required></br>
                <input type="checkbox" class="checkbox" required><span>I agree to the terms & conditions.</span><br>
                <button type="submit" class="submit-btn">Register</button>
                <p>Already have an account?<a href="login.php">Login now</a></p>
            </form>
        </div>
    </div>
    </script>
</body>
</html>