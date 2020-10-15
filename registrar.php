<?php
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
            <title>Registro</title>
            <link rel="shortcut icon" href="Img/name.ico" />
            <!--LIBRERIAS BOOTSTRAP-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/9ee254a0d0.js" crossorigin="anonymous"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
            <link rel="stylesheet" href="Css/estilos.css">     
</head>
<body class="row">
<center class="col-sm-4 m-auto">
    <div class=" w-50">
       <strong><h4>REGISTRO PERSONA</h4></strong>
   
       <form action="registroUsuarios.php" method="POST" autocomplete="off" class="p-2 ">
       <!--mostrar errores registro-->
                    <?php if(isset($_SESSION['completado'])): ?>
                    <div class="alerta alerta-exito text-light bg-success w-50 rounded ">
                        <h5 class="text-light m-auto"><?=$_SESSION['completado']?></h5>
                    </div><br>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                    <div class="alerta alerta-exito">
                        <?=$_SESSION['errores']['general']?>
                    <?php endif; ?>
                   </div><br>
            <div class="form-group">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ; ?>
                <input type="text" id="" name="nombres" placeholder="Nombres" class="form-control">
            </div>
            <div class="form-group">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '' ; ?>
                <input type="text" id="" name="apellidos" placeholder="Apellidos" class="form-control" >
            </div>
            <div class="form-group">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'tipoDocumento') : '' ; ?>
                <select id="" name="tipo_documento" class="form-control" >
                    <option value="">Seleccione</option>
                    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                    <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                    <option value="Cedula extranjera">Cedula extranjeria</option>
                </select>
            </div>
            <div class="form-group">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'documento') : '' ; ?>
                <input type="number" id="" name="documento" placeholder="Numero Documento" class="form-control">
            </div>
            <div class="form-group">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'telefono') : '' ; ?>
                <input type="tel" id="" name="telefono" placeholder="Telefono" class="form-control">
            </div>
            <div class="form-group">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ; ?>
                <input type="email" id="" name="email" placeholder="E-MAIL" class="form-control">
            </div>
            <div class="form-group">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'usuario') : '' ; ?>
                <input type="text" id="" name="usuario" placeholder="Usuario" class="form-control">
            </div>
            <div class="form-group">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ; ?>
                <input type="password" id="" name="password" placeholder="Contraseña" class="form-control">
            </div>
            <div class="form-group p-2" align="center">
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
   