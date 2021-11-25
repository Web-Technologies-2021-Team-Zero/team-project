<?php 
require __DIR__ ."/connection.php";
//include("connection.php");
// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $file = $_FILES['file']['name'];
   // $username = joana;
    $mycourse = $_POST['mycourse'];
    $filename = $_POST['filename'];

    // destination of the file on the server
    $destination = 'upload/' . $file;

    // get the file extension
    $extension = pathinfo($file, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    if (!in_array($extension, ['png', 'pdf', 'docx', 'jpg'])) {
        echo '<script language="javascript">';
        echo 'alert("You file extension must be .jpg, .pdf, .png or .docx")';
        echo '</script>';
    } elseif ($_FILES['file']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
        echo '<script language="javascript">';
        echo 'alert(""File too large!"")';
        echo '</script>';
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO `files` (`id`, `user_id`, `filename`, `uploaded_by`, `course`, `temp_filename`) VALUES 
            (NULL, '5', '$filename', 'Ernest Oppong', '$mycourse', '$file')";
            if (mysqli_query($conn, $sql)) {
                echo '<script language="javascript">';
                echo 'alert("File sucessfully uploaded")';
                echo '</script>';
                header("Location: index.php");
            }
        } else {
            echo '<script language="javascript">';
            echo 'alert("Error.Please try again")';
            echo '</script>';
        }
    }
}

?>


<?php /*
//include("connection.php");
include_once (dirname(__FILE__)).'../../database/controllers/input_controller.php';

if(isset($_POST['submit']))
{   
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";
 $filename = $_POST['filename'];
 $username = 'joana';
 $mycourse = $_POST['mycourse'];

 
 /* new file size in KB */
 //$new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 //$new_file_name = strtolower($file);
 /* make file name in lower case */
 
 /*
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  upload($filename, $username, $mycourse, $final_file);
  
  echo '<script language="javascript">';
  echo 'alert("File sucessfully uploaded")';
  echo '</script>';
  header("Location: index.php");
        
  
 }
 else
 {
  
  echo '<script language="javascript">';
  echo 'alert("Error.Please try again")';
  echo '</script>';
		
		}
	}
?>

<?php
// start session so that the errors can be available in this file
session_start();
*/
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
        <form   action="upload.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm(event);">
           <h1 id="icon"><i class="fa fa-cloud-upload fa-2x" ></i><span><span>up</span>load</span></h1>	
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
                <input type="text" placeholder="Enter file name" id="username" name="filename">
                <small id='usernameError'></small>
            </div>
            <div class="form-control">
                <div class="major">
                        <label for="Courses">courses <br> (Web Technologies, Embedded Systems, Data Strutures and Algorithms, FDE, System Dynamics)</label>
                        <input type="text" placeholder="Enter course name" id="course" name="mycourse" value=""/>
                        <small id="error4"></small>
                </div>
                <br>
            <div class="form-control">
                <label for="">Upload File</label>
                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
            </div>
            <small id='success'></small>
            <button type="submit" id='submitBtn' name="submit">Upload</button>
            </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../frontend/scripts/upload.js"></script>
</body>
</html>