<?php 
$con = mysqli_connect('localhost', 'root', '', 'resource_hub');
?>

<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "resource_hub";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>