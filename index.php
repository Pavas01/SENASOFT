<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
        <!--LIBRERIAS BOOTSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9ee254a0d0.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
        
        <style>
            
        .centrar{
            transform: translate(0%, 30%);
        }
        </style>
        
</head>
<body> 
<div class="container p-4 centrar">
    <strong >
        <h4 class="text-center">INICIAR SESION</h4>
    </strong><hr>
    <center class="border rounded">
        <div class="container p-4" align="center">

            <form action="Includes/login.php" class="inicio_sesion w-50" autocomplete="off" method="POST">
                <div class="form-group" style="padding-right: 4px; ">
                    <div class="input-group user">
                        <label for="Correo" class="sr-only">Usuario</label>
                        <span class="input-group-addon bg-success text-light rounded-left p-1 addon">
                            <i class="fas fa-user p-1"></i>
                        </span>
                        <input type="text" class="form-control rounded-0" name="user" id="" required>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="input-group">
                        <label for="Correo" class="sr-only">Password</label>
                        <span class=" bg-success text-light rounded-left p-1 addon">
                            <i class="fas fa-key p-1"></i>
                        </span>
                        <input type="password" class="form-control" name="pass" id="" required>
                    </div>
                    <div class="p-4">
                            <button type="submit" class="btn btn-success enviar m-auto">Aceptar</button>
                    </div>
                     <a href="Archivos/registrar.php">¿No tienes cuenta? Registrarse</a>
                </div>
               
            </form>

        </div>
    </center>
</div>
    <!--LIBRERIAS SCRIPTS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--LIBRERIAS BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>