<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli ($servername, $username, $password);

//CREATING DATABASE
$sql = "CREATE DATABASE location_base";

if ($conn->query($sql) === TRUE){
    echo "<br> Database created successfully"; 
} else {
    echo "<br> Error creating database: " . $conn->error;
}
?>