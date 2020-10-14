<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "senasoft";

// Create connection
$conexion = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
echo "Connected successfully";
 ?>