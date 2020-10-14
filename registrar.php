<?php
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
            <title>Document</title>
            <!--LIBRERIAS BOOTSTRAP-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/9ee254a0d0.js" crossorigin="anonymous"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
            <link rel="stylesheet" href="Css/estilos.css">     
</head>
<body>
<center class="p-5">
<div class="container">
   <strong><h4>REGISTRO PERSONA</h4></strong>
   
   <form action="registroUsuarios.php" method="POST" autocomplete="off">
       <!--mostrar errores registro-->
                    <?php if(isset($_SESSION['completado'])): ?>
                    <div class="alerta alerta-exito text-light bg-success w-50 rounded ">
                        <h5 class="text-light m-auto"><?=$_SESSION['completado']?></h5>
                    </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                    <div class="alerta alerta-exito">
                        <?=$_SESSION['errores']['general']?>
                    <?php endif; ?>
        <div class="row">
           <div class="col-25">
            </div>
            <div class="col-75">
                
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ; ?>
                <input type="text" id="" name="nombres" placeholder="Nombres">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
            </div>
            <div class="col-75">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '' ; ?>
                <input type="text" id="" name="apellidos" placeholder="Apellidos" >
            </div>
        </div>
        <div class="row">
            <div class="col-25">
            </div>
            <div class="col-75">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'tipoDocumento') : '' ; ?>
                <select id="" name="tipo_documento" >
                    <option value="">Seleccione</option>
                    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                    <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                    <option value="Cedula extranjera">Cedula extranjeria</option>
                </select>
            </div>
        </div>
        <div class="row">
           <div class="col-25">
            </div>
            <div class="col-75">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'documento') : '' ; ?>
                <input type="number" id="" name="documento" placeholder="Numero Documento">
            </div>
        </div>
        <div class="row">
           <div class="col-25">
            </div>
            <div class="col-75">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'telefono') : '' ; ?>
                <input type="number" id="" name="telefono" placeholder="Telefono">
            </div>
        </div>
        <div class="row">
           <div class="col-25">
            </div>
            <div class="col-75">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ; ?>
                <input type="email" id="" name="email" placeholder="E-MAIL">
            </div>
        </div>
         <div class="row">
           <div class="col-25">
            </div>
            <div class="col-75">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'usuario') : '' ; ?>
                <input type="text" id="" name="usuario" placeholder="Usuario">
            </div>
        </div>
        <div class="row">
           <div class="col-25">
            </div>
            <div class="col-75">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ; ?>
                <input type="password" id="" name="password" placeholder="Contraseña">
            </div>
        </div>
        <div class="row p-2" align="center">
            <button type="submit" value="Aceptar" class="btn btn-success m-auto">Aceptar</button>
        </div>
        <div class="row p-2 m-auto" align="center">
            <a href="index.php" class="m-auto">¿Ya tienes una cuenta? Iniciar sesion</a>
        </div>
    </form>
   <?php borrarErrores();  ?>
</div>
</center>
<!--LIBRERIAS SCRIPTS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--LIBRERIAS BOOTSTRAP-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>
   