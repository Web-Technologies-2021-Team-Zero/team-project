<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "resource_hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo '<script language="javascript">';
//echo 'alert("Connected successfully")';
//echo '</script>';
?>