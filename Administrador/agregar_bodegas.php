<?php
     require_once 'recibe_bodega.php';

//traer id y nombre al select   
	$idempresa=("SELECT * FROM  sucursal");
	$empresa=(mysqli_query($conexion,$idempresa));

	$idmunicipio=("SELECT * FROM  municipio");
	$municipio=(mysqli_query($conexion,$idmunicipio));

?>
 
<?php require_once '../includes/header.php'; ?>
<style>
            @media screen and (max-width: 990px) {
        .res{
            display: none;
        }
    }
</style>
<!-- validacion y recorrido en la variable GET -->
<?php
        if(isset($_GET['editar'])){
            $id=$_GET['editar'];
            
            $sql=mysqli_query($conexion, "SELECT * FROM bodega join municipio on bodega.id_municipio= municipio.id 
join sucursal on bodega.id_sucursal = sucursal.id;");
             $filas=mysqli_fetch_array($sql);
             $editar=true;
             $nombre=$filas['nombrebodega'];
             $direccion=$filas['direccion'];
             $unmunicipio=$filas['id_municipio'];
             $unmunicipio1=$filas['municipio'];
             $telefono=$filas['telefono'];
             $sucursal=$filas['id_sucursal'];
             $sucursal1=$filas['nombre'];
            
        }
?>
<!-- formulario agregar bodega-->
<div class="row"> 
   <div class="col-sm-12 col-md-12 col-lg-3 p-4"> 
   <div class="card">
    <form action="recibe_bodega.php" method="POST" class="m-auto" autocomplete="off">
           <center class="m-auto p-2">
                <?php if($editar==false){?>
                   <strong><h4>INSERTAR BODEGA</h4></strong></center>
                <?php }else{ ?>
                   <strong><h4><a href="agregar_bodegas.php"><i class="fas fa-sync-alt"></i>INSERTAR BODEGA</a></h4></strong></center>
                <?php } ?>         
           
           <center class="m-auto p-2"><?php  if(isset($_SESSION['realizo'])){
            echo $_SESSION['realizo'];
//eliminar al actualizar sin cerrar la session
            } ?>
            </center>
            <div class="form-group">
                    <input type="hidden" id="id" name="id" placeholder="ID" class="form-control  m-auto" value="<?php echo $id; ?>">
            </div>
            <div class="form-group">
                    <input type="text" id="nombre" name="nombre" placeholder="NOMBRE" class="form-control  m-auto" value="<?php echo $nombre; ?>">
            </div>
            <div class="form-group">
                    <input type="text" id="direccion" name="direccion" placeholder="DIRECCION" class="form-control  m-auto" value="<?php echo $direccion; ?>">
            </div>
            <div class="form-group">
				<select class="form-control  m-auto" name="id_municipio" id="id_municipio" placeholder="MUNICIPIO">
                    <option value="<?php echo $unmunicipio; ?>">
                        <?php if($editar==false){?>
                            Seleccione...
                        <?php }else{ ?>
                             <?php echo $unmunicipio1;?>
                        <?php } ?>   
                       </option>
                        <?php while ($vertd=mysqli_fetch_array($municipio)) {?>
                    <option value = "<?php echo $vertd[0]; ?>">
                        <?php echo $vertd[1]; ?>
                    </option>
                        <?php } ?>
				</select>
			</div>
			<div class="form-group">
                <select class="form-control  m-auto" name="id_empresa" id="id_empresa" placeholder="EMPRESA">
                    <option value="<?php echo $sucursal ?>">
                       <?php
                         if($editar==false){?>
                            Seleccione...
                        <?php }else{ ?>
                             <?php echo $sucursal1;?>
                        <?php } ?>
                        </option>
                        <?php while ($vertd=mysqli_fetch_array($empresa)) {?>
                    <option value = "<?php echo $vertd[0]; ?>">
                        <?php echo $vertd[1]; ?>
                    </option>
                        <?php } ?>
                </select>	
            </div>
            <div class="form-group">
                <input type="text" id="telefono" name="telefono" placeholder="TELEFONO" class="form-control  m-auto" value="<?php echo $telefono ?>">
            </div>
        <div class="row" align="center">
           <?php if($editar==false){?>
                   <input type="submit"  name="Guardar" value="Guardar" class="btn btn-success m-auto w-50" >
                <?php }else{ ?>
                   <input type="submit" name="Editar"  value="Editar" class="btn btn-warning m-auto w-50" >
                <?php } ?>   
    
        </div>
    </form>
    </div> 
</div>
<!-- tabla bodega -->
<div class="col-sm-12 col-md-12 col-lg-9 p-4">
   <div class="m-auto border">
    <table class="table table-border text-center bg-ligth">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th class="res">Direccion</th>
                <th class="res">Municipio</th>
                <th class="res">Telefono</th>
                <th class="res">Surcusal</th>
                <th class="res">Accion</th>
            </tr>
        </thead>
        <tbody>
           <?php 
            $sql=mysqli_query($conexion,
            "SELECT * FROM bodega join municipio on bodega.id_municipio = municipio.id
            join sucursal on bodega.id_sucursal = sucursal.id");
            while($row = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $row[1]?></td>
                <td class="res"><?php echo $row[2]?></td>
                <td class="res"><?php echo $row[7]?></td>
                <td class="res"><?php echo $row[4]?></td>
                <td class="res"><?php echo $row[10]?></td>
                <td>
                    <a href="agregar_bodegas.php?editar=<?php echo $row[0] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>    
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    </div>
</div>
</div>

<?php require_once '../includes/footer.php'; ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>