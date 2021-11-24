<?php
// start session so that the errors can be available in this file
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../frontend/styles/upload.css">
    <style>
        
    </style>
    <title>Resource Hub | Team Zero </title>
</head>
<body>

    <div class="container">

        <!-- ADD THIS ATTRIBUTE TO THE FORM TO ALSO VALIDATE WITH JAVASCRIPT BEFORE SUBMITTING TO BACKEND:
              onsubmit="return validateForm(event);" 
        -->
        <form   action="../database/contollers/input_controller.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm(event);">
           <h1 id="icon"><i class="fa fa-cloud-upload fa-2x" ></i><span><span>up</span>Date</span></h1>	
            <?php
                if(isset($_SESSION["errors"])){
                    $errors = $_SESSION["errors"];
                    // loop through errors and display them
                    foreach($errors as $error){
                        ?>
                            <small style="color: red"><?= $error."<br>"; ?></small>
                        <?php
                    }
                }
                // destroy session after displaying errors
                $_SESSION["errors"] = null;
            ?>
            <div class="form" id="form">
            <div class="form-control">
                <label for="filename">File Name</label>
                <input type="text" placeholder="Enter new file name" id="username" name="filename">
                <small id='usernameError'></small>
            </div>
            <div class="form-control">
                <label for="course">Course</label>
                <input list="courses"  name="mycourse" /></label>
                        <datalist id="courses">
                           <option value="Web Technologies">
                           <option value="Embedded Systems">
                           <option value="Data Structures and Algorithms">
                           <option value="FDE">
                           <option value="System Dynamics">
                        </datalist>
            </div>
            <div class="form-control">
                <label for="">Upload File</label>
                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
            </div>
            <small id='success'></small>
            <button type="submit" id='submitBtn' name="submit">Update</button>
            </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>
</html>