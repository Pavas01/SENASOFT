<?php require_once '../../../includes/conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <!--LIBRERIAS BOOTSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9ee254a0d0.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
        
        <link rel="stylesheet" href="../../../Css/estilos.css">
        <style>
            body{
                overflow-x: hidden;
            }
        </style>
        
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-lg">
      <a class="navbar-brand text-light" href="../index.php">SENASOFT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
		  
          <li class="nav-item active">
              <a class="nav-link text-light" href="../herencias/registros.php">Registros<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="">Nombre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href=""></a>
          </li>
    </ul>
    
    <div class="nav-item text-light"  style="margin-right:6em;">
		    <ul class="nav nav-pills">
     <li class="nav-item dropdown ">
         <a class="nav-link dropdown-toggle text-light cuenta" data-toggle="dropdown" href="#"><img src="https://image.freepik.com/vector-gratis/perfil-avatar-hombre-icono-redondo_24640-14044.jpg" 
         class="rounded-circle img-fluid" width="30px" heigth="30px"></a>
     <div class="dropdown-menu bg-dark">
         <a class="dropdown-item bg-dark text-light" href="#">Ver Perfil</a>
         <a class="dropdown-item bg-dark text-light" href="#">Cerrar Sesion</a>
     </div>
     </li>
     </ul>
	</div>
  </div>
</nav>

<div class="row">
   <div class="col-sm-3 p-2 m-auto">
       <div class="p-3">
         <div class="card p-2">
          <strong class="m-auto p-2">Agregar Productos</strong>
           <form action="">
               <div class="form-group">
                   <input type="text" class="form-control m-auto w-75" placeholder="Nombre">
               </div>
               <div class="form-group">
                   <input type="text" class="form-control m-auto w-75" placeholder="Cantidad">
               </div>
               <div class="form-group">
                   <input type="text" class="form-control m-auto w-75" placeholder="Descripcion">
               </div>
               <div class="form-group">
                   <input type="text" class="form-control m-auto w-75" placeholder="Precio Unidad">
               </div>
               <div class="form-group">
                   <input type="text" class="form-control m-auto w-75" placeholder="Peso">
               </div>
               <div class="form-group">
                   <select name="" id="" class="form-control w-75 m-auto">
                       <option value="">seleccione</option>
                       <option value="">bodega</option>
                       <option value=""></option>
                   </select>
               </div>
               <div class="form-group" align="center">
                   <button type="submit" class="btn btn-success">Aceptar</button>
               </div>
           </form>
           </div>
       </div>
   </div>
   
   <div class="col-sm-9 p-2">
      <div class="p-2">
      <div class="p-2">
       <table class="table table-bordered">
           <thead class="thead-dark text-center">
              <tr>
                   <th>Nombre</th>
                   <th>Accion</th>
               </tr>
           </thead>
           <tbody class="text-center">
            <?php
               
               $sql="SELECT * FROM productos;";
               $mostrar = mysqli_query($conexion, $sql);
               
                while ($row=mysqli_fetch_array($mostrar)) {
               
            ?>
              <tr>
                   <td><?php echo  $row[1];?></td>
                   <td>
                       <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                       <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                   </td>
               </tr>
               <?php } ?>
           </tbody>
       </table>
       </div>
       </div>
   </div>
</div>
    
<!--LIBRERIAS SCRIPTS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--LIBRERIAS BOOTSTRAP-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>