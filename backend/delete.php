<?php
    require_once 'conn.php';
 
    if($_POST['submit']){
        $file_name=$_REQUEST['filename'];
 
        $query=mysqli_query($conn, "SELECT * FROM `files` WHERE `file_id`='$file_id'") or die(mysqli_error());
        $fetch=mysqli_fetch_array($query);
 
        $location=$fetch['location'];
 
 
        if(unlink($location)){
            mysqli_query($conn, "DELETE FROM `files` WHERE `file_id`='$file_id'") or die(mysqli_error());
 
            header('location: index.php');
        }
 
    }
 
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
        <form   action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm(event);">
           <h1 id="icon"><span>Confirm Delete</span></h1>	
            <div class="form" id="form">
            <?php 
                echo "Are you sure you want to delete...";
            ?>
            <small id='success'></small>
            <button type="submit" id='submitBtn' name="submit">Delete</button>
            </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../frontend/scripts/upload.js"></script>
</body>
</html>