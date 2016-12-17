<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epkbm";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO pkbm (nilem, nama_pkbm)
    VALUES (:nilem, :nama_pkbm)");
    $stmt->bindParam(':nilem', $nilem);
    $stmt->bindParam(':nama_pkbm', $nama_pkbm);

    echo "New records created successfully";
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;

function getParameter($par, $default = null){
        if (isset($_GET[$par]) && strlen($_GET[$par])) 
            return $_GET[$par];
        elseif (isset($_POST[$par]) && strlen($_POST[$par])) 
            return $_POST[$par];
        else 
            return $default;
    }

    $nilem = getParameter("nilem");
    $nama_pkbm = getParameter("nama_pkbm");

    $stmt->execute();
    
    echo "clear";
flush();

?>