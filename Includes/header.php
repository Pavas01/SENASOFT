<?php require_once '../Includes/redireccion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <!--LIBRERIAS BOOTSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9ee254a0d0.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
        
        <link rel="stylesheet" href="../Css/estilos.css">
        
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-lg">
      <a class="navbar-brand text-light" href="index.php">SENASOFT</a>
      		    <ul class="nav nav-pills">
     <li class="nav-item dropdown ">
         <a class="nav-link dropdown-toggle text-light cuenta" data-toggle="dropdown" href="#"><img src="https://image.freepik.com/vector-gratis/perfil-avatar-hombre-icono-redondo_24640-14044.jpg" 
         class="rounded-circle img-fluid" width="30px" heigth="30px"></a>
     <div class="dropdown-menu bg-dark">
        <a class="dropdown-item bg-dark text-light" href=""><?php 
            
            echo $_SESSION['usuario'] ['nombres'] ." ". $_SESSION['usuario']['apellidos'];?></a>
         <a class="dropdown-item bg-dark text-light" href="../Includes/cerrar_sesion.php">Cerrar Sesion</a>
     </div>
     </li>
     </ul>
</nav>
    
  </div>