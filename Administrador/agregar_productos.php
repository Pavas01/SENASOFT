<?php //require_once '../Includes/conexion.php';?>
<?php require_once '../Includes/header.php';?>
<?php require_once 'recibe_producto.php';?>
<style>
    body{
        overflow-x: hidden;
    }
    
    #texto{
        text-align: center;
    }
    
    #div_file{
        position: relative;
        padding: 10px;
    }
    
    
    .file{
        position: absolute;
        top:0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

        @media screen and (max-width: 990px) {
        .res{
            display: none;
        }
    }
</style>
<?php     if(isset($_GET['edit'])){
                $id = $_GET['edit'];
                $edit=true;
                $datos = mysqli_query($conexion,"SELECT * FROM productos join bodega on productos.id_bodega = bodega.id where productos.id=$id");
                $dato= mysqli_fetch_array($datos);
                $nombre= $dato['nombre'];
                $cantidad= $dato['cantidad'];
                $descripcion= $dato['descripcion'];
                $precio= $dato['precio_unidad'];
                $peso= $dato['peso'];
                $bodega=$dato['id_bodega'];
                $bodega_nom=$dato['nombrebodega'];
                }

        $bodegass="SELECT * FROM bodega";
        $bodegas=mysqli_query($conexion,$bodegass);
?>
<!-- formulario agregar productos-->

<div class="row">
   <div class="col-sm-12 col-md-12 col-lg-3 m-auto">
       <div class="p-3">
         <div class="card p-2">
                     <?php  if($edit == false){?>
                          <strong class="m-auto p-2">Agregar Productos</strong>
                      <?php }else{ ?>
                         <strong class="m-auto p-2"><a href="agregar_productos.php"><i class="fas fa-sync-alt"></i> Agregar Productos</a></strong>
                       <?php } ?>
           <form action="recibe_producto.php" method="POST" enctype='multipart/form-data'>
              <div class="form-group">
                   <input type="hidden" name="id" class="form-control m-auto w-75" placeholder="Nombre" value="<?php echo $id; ?>" required>
               </div>
               <div class="form-group">
                   <input type="text" name="nombre" class="form-control m-auto w-75" placeholder="Nombre" value="<?php echo $nombre; ?>" required>
               </div>
               <div class="form-group">
                   <input type="text" name="cantidad" class="form-control m-auto w-75" placeholder="Cantidad" value="<?php echo $cantidad; ?>" required>
               </div>
               <div class="form-group">
                   <input type="text" name="precio" class="form-control m-auto w-75" placeholder="Precio Unidad" value="<?php echo $precio; ?>" required>
               </div>
               <div class="form-group">
                   <input type="text" name="peso" class="form-control m-auto w-75" placeholder="Peso" value="<?php echo $peso; ?>" required>
               </div>
               <div class="form-group">
                   <select name="bodega" id="bodega" class="form-control w-75 m-auto" required>
                       <option value="<?php echo $bodega?>">
                       <?php  if($edit == false){?>
                         Seleccione
                      <?php }else{ ?>
                         <?php echo $bodega_nom;?>
                       <?php } ?>
                       </option>
                       <?php while($filas = mysqli_fetch_array($bodegas)){?>
                       <option value="<?php echo $filas[0] ?>"><?php echo $filas[1] ?></option>
                       <?php }?>
                   </select>
               </div>
               <div class="form-group">
                   <textarea name="descripcion" rows="4" class="form-control w-75 m-auto" placeholder="Descripcion" required><?php echo $descripcion; ?></textarea>
               </div>
               <div class="form-group">
                   <div class="form-control w-75 m-auto" id="div_file">
                      <p id="texto">Agregar Foto</p>
                       <input type="file" name="subir_documento" id="subir_documento" class="form-control m-auto file" required>
                    </div>
               </div>
               <div class="form-group" align="center">
                      <?php  if($edit == false){?>
                          <button type="submit" class="btn btn-success w-50" name="Aceptar">Aceptar</button>
                      <?php }else{ ?>
                          <button type="submit" class="btn btn-warning w-50" name="Editar">Editar</button>
                       <?php } ?>
               </div>
           </form>
           </div>
       </div>
   </div>
   <!-- tabla productos-->
   <div class="col-sm-12 col-md-12 col-lg-9">
      <div class="p-2">
      <div class="p-2">
       <table class="table table-bordered">
           <thead class="thead-dark text-center">
              <tr>
                   <th>Nombre</th>
                   <th class="res">Cantidad</th>
                   <th class="res">Precio</th>
                   <th class="res">Descripcion</th>
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
                   <td class="res"><?php echo  $row[2];?></td>
                   <td class="res"><?php echo "$". $row[4];?></td>
                   <td class="res"><?php echo  $row[3];?></td>
                   <td>
                       <a href="agregar_productos.php?edit=<?php echo $row[0] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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