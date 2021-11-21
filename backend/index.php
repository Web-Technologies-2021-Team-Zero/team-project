<?php //include __DIR__ . "../database/controllers/input_controller.php"; ?>

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
<body onload="test()">
    <nav class="nav-bar">
        <img src="../frontend/images/logo_v1.JPG" alt="Resource hub logo" style="height:100px">
        <a href="login.php" class="btn-logout">Logout</a>
    </nav>
            
            <!-- Main content section starts here   -->
        <div class="main-content">
        <div class="wrapper">
                 <h1>All Files</h1>
                
                 <div>
                     <!-- Drop down menu -->
                     <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Browse by course
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Web Technologies</a>
                    <a class="dropdown-item" href="#">Embedded Systems</a>
                    <a class="dropdown-item" href="#">Data Structures and Algorithms</a>
                    <a class="dropdown-item" href="#">FDE</a>
                    <a class="dropdown-item" href="#">System Dynamics</a>
                    </div>
                    </div>

                    <!-- Button to add upload files -->
                 <div class="up-btns">
                 <a href="#" class="btn-primary">Upload</a>
                 <a href="myFiles.php" class="btn-primary">My Files</a>
                 </div>
                 </div>
                 <br><br>
                
                <table style="width: 100%;">
                        <tr>
                             <th>File name</th>
                             <th>Uploaded by</th>
                             <th>Course</th>
                             <th>Actions</th>
                        </tr>
                        <tr>
                             <td>Form validation</td>
                             <td>Joana Teye</td>
                             <td>Web Technologies</td>
                             <td>
                                 <a href="#" class="btn-tertiary">Download</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>Combinational logic</td>
                             <td>Lorraine Makuyana</td>
                             <td>System Dynamics</td>
                             <td>
                             <a href="#" class="btn-tertiary">Download</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>PID Controllers</td>
                             <td>Hutton Addy</td>
                             <td>System Dynamics</td>
                             <td>
                             <a href="#" class="btn-tertiary">Download</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>Design Thinking</td>
                             <td>Julius Ceasar</td>
                             <td>FDE</td>
                             <td>
                             <a href="#" class="btn-tertiary">Download</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>Form validation</td>
                             <td>Joana Teye</td>
                             <td>Web Technologies</td>
                             <td>
                                 <a href="#" class="btn-tertiary">Download</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>Combinational logic</td>
                             <td>Lorraine Makuyana</td>
                             <td>Data Structures and Dynamics</td>
                             <td>
                             <a href="#" class="btn-tertiary">Download</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>PID Controllers</td>
                             <td>Hutton Addy</td>
                             <td>System Dynamics</td>
                             <td>
                             <a href="#" class="btn-tertiary">Download</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>Design Thinking</td>
                             <td>Julius Ceasar</td>
                             <td>FDE</td>
                             <td>
                             <a href="#" class="btn-tertiary">Download</a> 
                             </td>   
                        </tr>
                        <tr>
                             <td>Ethics and Morals</td>
                             <td>Millicent</td>
                             <td>Embedded Systems</td>
                             <td>
                             <a href="#" class="btn-tertiary">Download</a> 
                             </td>   
                        </tr>
                </table>

                 <div class="clearfix"></div>
            </div>
        </div>
        <!--  Main content section ends here  -->
        
        <div style="clear: both;"></div>
        <br> 
        <br>
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