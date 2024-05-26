<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, "location_base");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo '<script type="text/javascript">
        window.onload = function() { alert("Connected Successfully"); } 
    </script>';
?>
