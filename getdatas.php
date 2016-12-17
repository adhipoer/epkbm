<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epkbm";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$par = $_GET['par'];

// echo $par;

$sql = "SELECT * FROM pkbm WHERE nilem='$par'";
$pkbm = $conn->query($sql);
header('Content-Type: application/json');
echo json_encode($pkbm->fetch_assoc());
    
?>