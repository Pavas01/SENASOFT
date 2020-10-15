<?php  require_once '../Includes/header.php';   ?>
<?php  require_once 'recibe_empresa.php';   ?>
<style>
    
    select{
        text-align: center; 
    }
      @media screen and (max-width: 990px) {
        .res{
            display: none;
        }
    }
</style>

<?php
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        $editar=true;
        $sql="SELECT * FROM empresa where id=$id";
        $result=mysqli_query($conexion,$sql);
        $row=mysqli_fetch_array($result);
        $nombre=$row['empresa'];
        $telefono=$row['telefono'];
        $correo=$row['correo'];
    }
?>

<div class="row"> 
    <div class="col-sm-12 col-md-12 col-lg-3">
        <div class="container m-auto" style="padding-top:20px;">
            <form action="recibe_empresa.php" class="bg-light p-2 border rounded" method="POST">
                <div class="form-group"><br>
                    
                        <?php if($editar==false){?>
                           <center class=""><h4>Nueva Empresa</h4></center>
                       <?php }else{ ?>
                            <center class=""><h4><a href="agregar_empresas.php"><i class="fas fa-sync-alt"></i> Nueva Empresa</a></h4></center>
                       <?php } ?>
                    
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" placeholder="Nombre" value="<?php echo $id ?>">
                </div>
                 <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre ?>" required>
                </div>
                <div class="form-group">
                    <input type="tel" id="telefono" name="telefono" placeholder="Telefono" class="form-control" value="<?php echo $telefono ?>" required>
                </div>
                 <div class="form-group">
                    <input type="email" id="correo" name="correo" placeholder="Correo Electronico" class="form-control" value="<?php echo $correo ?>" required>
                </div>
                <div class="row" align="center">
                     <?php if($editar==false){?>
                           <input type="submit" value="Guardar" class="btn btn-success m-auto w-50" name="Guardar">
                       <?php }else{ ?>
                            <input type="submit" value="Editar" class="btn btn-warning m-auto w-50" name="Editar" >
                       <?php } ?>
                </div><br>
            </form>
        </div>
    </div>
    <div class="col-sm-12  col-md-12 col-lg-9">
        <div class="container" style="padding-top:20px;">
            <table class="table table-bordered text-center bg-light">
                    <thead class="thead-dark">
                        <th>Nombre</th>
                        <th class="res">Telefono</th>
                        <th class="res">Correo</th>
                        <th class="res">Accion</th>
                    </thead>
                    <tbody>
                       <?php $sql="SELECT * FROM empresa";
                        $result=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row[1]?></td>
                            <td class="res"><?php echo $row[2]?></td>
                            <td class="res"><?php echo $row[3]?></td>
                            <td class="res">
                                <a href="agregar_empresas.php?edit=<?php echo $row[0] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash alt"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div>
    </div>
    
</div>

<?php  require_once '../Includes/footer.php';   ?>