<?php

     require_once '../Includes/conexion.php';   


	$idempresa=("SELECT * FROM  empresa");
	$empresa=(mysqli_query($conexion,$idempresa));

	$idmunicipio=("SELECT * FROM  municipio");
	$municipio=(mysqli_query($conexion,$idmunicipio));

?>
<?php require_once '../includes/header.php'; ?>

<div class="p-4">
<div class="p-4">
    <form action="recibe_bodega.php" method="POST" class="shadow-lg w-75 m-auto p-4" >
           <center class="m-auto p-2"><strong><h4>INSERTAR BODEGA</h4></strong></center>
           <center class="m-auto p-2"><?php  if(isset($_SESSION['realizo'])){
            echo $_SESSION['realizo'];
//eliminar al actualizar sin cerrar la session
            } ?>
            </center>
            <div class="form-group">
                    <input type="text" id="nombre" name="nombre" placeholder="NOMBRE" class="form-control w-50 m-auto">
            </div>
            <div class="form-group">
                    <input type="text" id="direccion" name="direccion" placeholder="DIRECCION" class="form-control w-50 m-auto">
            </div>
            <div class="form-group">
				<select class="form-control w-50 m-auto" name="id_municipio" id="id_municipio" placeholder="MUNICIPIO">
                    <option value="">Seleccione...</option>
                        <?php while ($vertd=mysqli_fetch_array($municipio)) {?>
                    <option value = "<?php echo $vertd[0]; ?>">
                        <?php echo $vertd[1]; ?>
                    </option>
                        <?php } ?>
				</select>
			</div>
			<div class="form-group">
                <select class="form-control w-50 m-auto" name="id_empresa" id="id_empresa" placeholder="EMPRESA">
                    <option value="">Seleccione...</option>
                        <?php while ($vertd=mysqli_fetch_array($empresa)) {?>
                    <option value = "<?php echo $vertd[0]; ?>">
                        <?php echo $vertd[1]; ?>
                    </option>
                        <?php } ?>
                </select>	
            </div>
            <div class="form-group">
                <input type="text" id="telefono" name="telefono" placeholder="TELEFONO" class="form-control w-50 m-auto">
            </div>
        <div class="row" align="center">
            <input type="submit" value="Guardar" class="btn btn-success m-auto" >
        </div>
    </form>
</div>
</div>

<?php require_once '../includes/footer.php'; ?>