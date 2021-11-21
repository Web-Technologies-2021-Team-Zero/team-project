<?php 

include 'connection.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
   header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="../frontend/styles/login.css" rel="stylesheet" type="text/css" />

    <title>Resource Hub | Team Zero</title>
</head>
<body>
    <div class="main-container" >
        <div class="login-container">
            <div class="login"> 
                <form action="index.html" method="post">
                    <div class="logo">
                        <img src="./images/logo_v1.JPG" alt="Logo" id="login-logo" />
                    </div>
                    <div class="username">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" />
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" />
                    </div>
                    <div class="button-container">
                        <input type="submit" id="signup-button" name="submit" value="Login">
                    </div>
                    <div class="contact-admin">
                        Don't have an account? <a href="signup.php">Sign Up</a><br /><br />
                        Forgot your password? <a href="forgotpassword.html">Reset it now</a>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>