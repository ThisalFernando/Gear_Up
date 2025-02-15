<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "GearUp_db";

$conn = new mysqli($servername, $username, $password, $dbName);

//Check the connection
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}


?>