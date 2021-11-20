<?php 

include 'connection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
    $yearGroup = $_POST['yeargroup'];
    $major = $_POST['major'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['confirmpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (username, email, yearGroup, major, password)
					VALUES ('$username', '$email', '$yearGroup', '$major', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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
    <link href="../frontend/styles/signup.css" rel="stylesheet" type="text/css" />

    <title>Resource Hub | Team Zero</title>
</head>

<body>
    <div class="main-container" >
        <div class="login-container">
            <div class="login"> 
                <!-- <form method="POST"> -->
                <form action="login.php" method="post" onsubmit="validateUserInputs(event)">
                    <div class="logo">
                        <img src="./images/logo_v1.JPG" alt="Logo" id="login-logo" />
                    </div>
                    <div class="fullname">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" value=""/>
                        <small id="error1"></small>
                    </div>
                    <div class="email">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="" />
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
                        <input type="password" id="password" name="password" value=""/>
                        <small id="error5"></small>
                    </div>
                    <div class="confirmpassword">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" id="confirmpassword" name="confirmpassword" value=""/>
                        <small id="error6"></small>
                    </div>
                    <div class="button-container">
                        <input type="submit" id="signup-button" name="submit" value="Sign Up" value="">
                    </div>
                    <div class="contact-admin">
                        Already have an account? <a href="login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./scripts/signup.js"></script>
</body>
</html>