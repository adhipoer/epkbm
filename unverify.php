<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epkbm";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nilem = NULL;

if(isset($_POST["nilem"])) {
    $nilem = preg_replace("/[^A-Za-z0-9]/", '', $_POST["nilem"]);
}

// echo $nilem;
// print_r($_POST);

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
      $stmt = $conn->prepare("UPDATE pkbm SET status=0 WHERE nilem='$nilem'");

      // SELECT * FROM pkbm WHERE nilem = '$row["nilem"]'
      
      echo "UPDATE pkbm SET status=0 WHERE nilem='$nilem'";
      $stmt->execute();
      echo $stmt->rowCount() . " records UPDATED successfully";
  }
  catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

  header("Location: admin2.php");
  die();
?>