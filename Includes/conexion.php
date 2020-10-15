<?php 
//conexion a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$db = "senasoft";

// Create connection
$conexion = new mysqli($servername, $username, $password, $db);

// Check connection



// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}
//codificacion de base de datos
mysqli_query($conexion, "SET NAMES 'utf8'");
 ?>