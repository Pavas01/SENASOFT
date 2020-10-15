<?php

     require_once '../Includes/conexion.php';   


	$idempresa=("SELECT * FROM  empresa");
	$empresa=(mysqli_query($conexion,$idempresa));

	$idmunicipio=("SELECT * FROM  municipio");
	$municipio=(mysqli_query($conexion,$idmunicipio));

?>
<?php require_once '../includes/header.php'; ?>

<div class="row"> 
   <div class="col-sm-12 col-md-12 col-lg-3 p-4"> 
   <div class="card">
    <form action="recibe_bodega.php" method="POST" class="m-auto" autocomplete="off">
           <center class="m-auto p-2"><strong><h4>INSERTAR BODEGA</h4></strong></center>
           <center class="m-auto p-2"><?php  if(isset($_SESSION['realizo'])){
            echo $_SESSION['realizo'];
//eliminar al actualizar sin cerrar la session
            } ?>
            </center>
            <div class="form-group">
                    <input type="text" id="nombre" name="nombre" placeholder="NOMBRE" class="form-control  m-auto">
            </div>
            <div class="form-group">
                    <input type="text" id="direccion" name="direccion" placeholder="DIRECCION" class="form-control  m-auto">
            </div>
            <div class="form-group">
				<select class="form-control  m-auto" name="id_municipio" id="id_municipio" placeholder="MUNICIPIO">
                    <option value="">Seleccione...</option>
                        <?php while ($vertd=mysqli_fetch_array($municipio)) {?>
                    <option value = "<?php echo $vertd[0]; ?>">
                        <?php echo $vertd[1]; ?>
                    </option>
                        <?php } ?>
				</select>
			</div>
			<div class="form-group">
                <select class="form-control  m-auto" name="id_empresa" id="id_empresa" placeholder="EMPRESA">
                    <option value="">Seleccione...</option>
                        <?php while ($vertd=mysqli_fetch_array($empresa)) {?>
                    <option value = "<?php echo $vertd[0]; ?>">
                        <?php echo $vertd[1]; ?>
                    </option>
                        <?php } ?>
                </select>	
            </div>
            <div class="form-group">
                <input type="text" id="telefono" name="telefono" placeholder="TELEFONO" class="form-control  m-auto">
            </div>
        <div class="row" align="center">
            <input type="submit" value="Guardar" class="btn btn-success m-auto" >
        </div>
    </form>
    </div> 
</div>

<div class="col-sm-12 col-md-12 col-lg-9 p-4">
   <div>
    <table class="table table-border text-center">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Municipio</th>
                <th>Telefono</th>
                <th>Surcusal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
</div>
<?php require_once '../includes/footer.php'; ?>