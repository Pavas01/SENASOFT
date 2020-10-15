<?php  require_once '../Includes/header.php';   ?>

<div class="p-4">
    <div class="p-4">
        <form action="recibe_empresa.php" method="POST" class="shadow-lg w-75 m-auto p-4" >
               <center class="m-auto p-2"><strong><h4>INSERTAR EMPRESA</h4></strong></center>
                <div class="form-group">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre Empresa" class="form-control w-50 m-auto">
                </div>
                <div class="form-group">
                    <select class="form-control w-50 m-auto" name="id_municipio" id="id_municipio">
                        <option value="">Seleccione Municipio...</option>
                        <option value = ""></option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="form-control w-50 m-auto">
                </div>
                 <div class="form-group">
                    <input type="email" id="correo" name="correo" placeholder="Correo Electronico" class="form-control w-50 m-auto">
                </div>
            <div class="row" align="center">
                <input type="submit" value="Guardar" class="btn btn-success m-auto" >
            </div>
        </form>
    </div>
</div>

<?php  require_once '../Includes/footer.php';   ?>