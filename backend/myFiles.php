<?php require __DIR__ . "./../database/controllers/input_controller.php"; ?>
<?php
    $username = 'joana';

    $myFilesInfo = getMyFiles($username); 

    function displayMyFiles($username) {
        
        $myFilesInfo = getMyFiles($username); 
        if ($myFilesInfo) {
            $row = $myFilesInfo->fetch_array(MYSQLI_NUM); 
            while($row) {
                $id = $row[0];
                echo "<tr>"; 
                echo "<td>"; 
                echo $row[1]; 
                echo "</td>"; 
                echo "<td>"; 
                echo $row[2]; 
                echo "</td>"; 
                echo "<td>"; 
                echo $row[3]; 
                echo "</td>";
                echo "<td>"; 
                echo "<a href='update.php?itemToUpdate=$id' ><button name='update' class='btn-tertiary'>Update</button></a>";
                echo "<a href='myFiles.php?itemToDelete=$id' ><button name='delete' class='btn-secondary'>Delete</button></a>";
                echo "</td>";
                echo "</tr>";
            }
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../frontend/styles/mainpage.css" rel="stylesheet">

    <title>Resource Hub | Team Zero</title>
    <script src="../frontend/scripts/headings.js"></script>
</head>
<!-- <body onload="test()"> -->
<body>
    <nav class="nav-bar">
        <img src="../frontend/images/logo_v1.JPG" alt="Resource hub logo" style="height:100px">
        <a href="login.php" class="btn-logout">Logout</a>
    </nav>
            
            <!-- Main content section starts here   -->
        <div class="main-content">
        <div class="wrapper">
                 <h1>My Files</h1>
                
                 <div>

                    <!-- Button to add upload files -->
                 <div class="up-btns">
                 <a href="upload.php" class="btn-primary">Upload</a>
                 <a href="index.php" class="btn-primary">Main page</a>
                 </div>
                 </div>
                 <br> <br> <br>
                
                <table style="width: 100%;">
                        <tr>
                             <th>File name</th>
                             <th>Course</th>
                             <th>Date Uploaded</th>
                             <th>Actions</th>
                        </tr>

                        <?php

                            if(isset($_GET['itemToDelete'])) {
                                $id = $_GET['itemToDelete'];
                                $res = deleteFile($id); 
                                if ($res) {
                                    $myFilesInfo = array();
                                    displayMyFiles($username);
                                } else {
                                    echo "Delete failed";
                                }
                            }

                            displayMyFiles($username);

                        ?>
                        <!-- <tr>
                             <td>Form validation</td>
                             <td>date</td>
                             <td>Web Technologies</td>
                             <td>
                                <a href="update.php" class="btn-tertiary">Update</a>
                                <a href="#" class="btn-secondary">Delete</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>Combinational logic</td>
                             <td>date</td>
                             <td>Digital systems</td>
                             <td>
                             <a href="update.php" class="btn-tertiary">Update</a>
                             <a href="#" class="btn-secondary">Delete</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>Stack</td>
                             <td>date</td>
                             <td>Data Structures and Algorithms</td>
                             <td>
                                <a href="update.php" class="btn-tertiary">Update</a>
                                <a href="#" class="btn-secondary">Delete</a> 
                             </td>   
                        </tr> -->
                </table>

                 <div class="clearfix"></div>
            </div>
        </div>
        <!--  Main content section ends here  -->
    </nav>
    <div style="clear: both;"></div>

    <!--  Footer section starts here  -->
<div class="footer">
        <div class="wrapper">
                <p class="text-center">All rights reserved, Resource Study Hub. Developed by - <a href="#" class="footer-link">Team-zero</a> </p>
        </div>
</div>
<!--  Footer section ends here  -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="./scripts/index.js"></script>
</body>
</html>