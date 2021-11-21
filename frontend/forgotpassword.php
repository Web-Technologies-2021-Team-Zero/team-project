<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="./styles/forgotpassword.css" rel="stylesheet" type="text/css" />

    <title>Resource Hub | Team Zero</title>
</head>
<body>
    <div class="main-container" >
        <div class="login-container">
            <div class="login"> 
                <form action="login.html" method="post" onsubmit="validateUserInputs(event)">
                    <div class="logo">
                        <img src="./images/logo_v1.JPG" alt="Logo" id="login-logo" />
                    </div>
                    <div class="email">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" />
                        <small></small>
                    </div>
                    <div class="password">
                        <label for="password">Enter New Password</label>
                        <input type="password" id="password" name="password" />
                        <small></small>
                    </div>
                    <div class="confirmpassword">
                        <label for="confirmpassword">Confirm New Password</label>
                        <input type="password" id="confirmpassword" name="confirmpassword" />
                        <small></small>
                    </div>
                    <div class="button-container">
                        <input type="submit" id="signup-button" name="submit" value="Change Password">
                    </div>
                    <div class="contact-admin">
                        <br/>Don't have an account? <a href="signup.php">Sign Up</a><br /><br />
                        Already have an account? <a href="login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./scripts/forgotpassword.js"></script>
</body>
</html>