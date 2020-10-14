<?php


//REGISTRO DE USUARIOS 
//COMPROBAR SI NOS LLEGAN DATOS POR POST
if(isset($_POST)){
    //recoger los datos del formulario de registro
    echo $nombres = $_POST["nombres"]; 
  echo $apellidos = $_POST["apellidos"];
 echo $email = $_POST["email"];
  echo $password  = $_POST["password"];  
}