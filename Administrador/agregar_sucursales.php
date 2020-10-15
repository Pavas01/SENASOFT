


<?php require_once '../includes/header.php'; ?>
<?php require_once 'recibe_sucursales.php'; ?>
<style>
            @media screen and (max-width: 990px) {
        .res{
            display: none;
        }
    }
</style>
<!-- validacion GET-->
<?php 
    if(isset($_GET['editar'])){
        $id =$_GET['editar'];
        $editar=true;
        $consulta=mysqli_query($conexion,"SELECT * FROM sucursal join empresa on sucursal.id_empresa = empresa.id join municipio on sucursal.id_municipio = municipio.id WHERE sucursal.id=$id");
        $dato=mysqli_fetch_array($consulta);
         $nombre=$dato[1];
         $idempresa=$dato[2];
         $empresa=$dato[6];
         $telefono=$dato[3];
         $idmunicipio=$dato[4];
         $municipio=$dato[10];
    }

 $idmunicipioo="SELECT * FROM municipio";
        $municipioo=mysqli_query($conexion,$idmunicipioo);

 $idempresaa="SELECT * FROM empresa";
        $empresaa=mysqli_query($conexion,$idempresaa);

?>
<!-- Formulario agregar sucursal-->
<div class="row"> 
    <div class="col-sm-12 col-md-12 col-lg-3 p-4"> 
        <div class="card">
            <form action="recibe_sucursales.php" class="p-4" method="POST" autocomplete="off">
               <div class="form-group">
                   <?php  if($editar==false){?>
                            <center><h4>Registrar Sucursal</h4></center>
                        <?php  }else{?>
                             <center><h4><a href="agregar_sucursales.php"><i class="fas fa-sync-alt"></i> Registrar Sucursal</a></h4></center>
                        <?php }  ?>
                    
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control" placeholder="id">
                </div>
                <div class="form-group">
                    <input type="text" name="nombre" value="<?php echo $nombre?>" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <select name="empresa" id="" class="form-control">
                        <option value="<?php echo $idempresa ?>">
                            <?php  if($editar==false){?>
                            Seleccione
                        <?php  }else{?>
                            <?php echo $empresa ?>
                        <?php }  ?>
                        </option>
                        <?php 
                        while($j = mysqli_fetch_assoc($empresaa)){?>
                            <option value="<?php echo $j['id']?>"><?php echo $j['empresa']?></option>
                       <?php } ?>
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="telefono" value="<?php echo $telefono ?>" class="form-control" placeholder="Telefono">
                </div>
                <div class="form-group">
                    <select name="municipio" id="" class="form-control">
                        <option value="<?php echo $idmunicipio ?>">
                        <?php  if($editar==false){?>
                            Seleccione
                        <?php  }else{?>
                            <?php echo $municipio ?>
                        <?php }  ?>
                        </option>
                        
                      <?php while($f = mysqli_fetch_assoc($municipioo)){?>
                        <option value="<?php echo $f['id'] ?>"><?=$f['municipio'] ?></option>
                      <?php } ?>
                    </select>
                </div>
                  <center class="form-group">
                   
                         <?php  if($editar==false){?>
                            <button type="submit" class="btn btn-success m-auto w-50" value="Guardar" name="Guardar">Guardar</button>
                         <?php  }else{?>
                             <button type="submit" class="btn btn-warning m-auto w-50" value="Editar" name="Editar">Editar</button>
                        <?php }  ?>

                    
                </center>
            </form>
        </div>
    </div>
    <!-- tabla sucursal-->
     <div class="col-sm-12 col-md-12 col-lg-9 p-4"> 
        <div class="">
            <table class="table table-bordered bg-light text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th class="res">Empresa</th>
                        <th class="res">Telefono</th>
                        <th class="res">Municipio</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                       <?php
                        $sql=mysqli_query($conexion, "SELECT * FROM sucursal join empresa on sucursal.id_empresa = empresa.id join municipio on sucursal.id_municipio = municipio.id");
                        while($row = mysqli_fetch_array($sql)){?>
                    <tr>
                        <td><?php echo $row[1] ?></td>
                        <td class="res"><?php echo $row[6] ?></td>
                        <td class="res"><?php echo $row[3] ?></td>
                        <td class="res"><?php echo $row[10] ?></td>
                        <td>
                            <a href="agregar_sucursales.php?editar=<?php echo $row[0] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                        
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once '../includes/footer.php'; ?>