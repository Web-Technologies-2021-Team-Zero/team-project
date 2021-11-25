<?php include('server.php') ?>
<!--<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
        <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="signup.css" rel="stylesheet" type="text/css" />
    <title>Resource Hub | Team Zero</title>
</head>
<body>
    <div class="main-container" >
        <div class="login-container">
            <div class="login"> 
                <form action="register.php" method="post" onsubmit="validateUserInputs(event)">
				<?php include('errors.php'); ?>
                    <div class="logo">
                        <img src="./images/logo_v1.JPG" alt="Logo" id="login-logo" />
                    </div>
                    <div class="fullname">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" value="<?php echo $username; ?>"/> 
                        <small id="error1"></small>
                    </div>
                    <div class="email">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="<?php echo $email; ?>" />
                        <small id="error2"></small>
                    </div>
                    <div class="yeargroup">
                        <label for="yeargroup">Year group (2022, 2023, 2024, 2025)</label>
                        <input type="text" id="yeargroup" name="yeargroup" value="" />
                        <small id="error3"></small>
                    </div>
                    <div class="major">
                        <label for="major">Major (CE, EE, ME, MIS, CS, BA etc.)</label>
                        <input type="text" id="major" name="major" value=""/>
                        <small id="error4"></small>
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password_1" value=""/>
                        <small id="error5"></small>
                    </div>
                    <div class="confirmpassword">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" id="confirmpassword" name="password_2" value=""/>
                        <small id="error6"></small>
                    </div>
                    <div class="button-container">
                        <input type="submit" id="signup-button" name="reg_user" value="Sign Up" value="">
                    </div>
                    <div class="contact-admin">
                        Already have an account? <a href="login.php">Login</a><br>
                        <a style="padding-top: 30px" href="index.php">Go back home</a>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./scripts/signup.js"></script>
</body>
</html>