<?php 
require_once '../Includes/conexion.php';

             $editar=false;
             $id="";
             $nombre="";
             $direccion="";
             $municipio="";
             $telefono="";
             $sucursal="";


    if(isset($_POST['Editar'])){
        extract($_POST);
        
        $consulta=mysqli_query($conexion,"UPDATE bodega SET nombrebodega='$nombre',direccion='$direccion', id_municipio='$id_municipio',telefono='$telefono',id_sucursal='$id_empresa'");
        header('location:agregar_bodegas.php');
    }

    if(isset($_POST['Guardar'])){
        extract($_POST);
        
        $consulta2=mysqli_query($conexion,"INSERT INTO bodega Values (NULL,'$nombre','$direccion','$id_municipio','$telefono','$id_empresa')");
        header('location:agregar_bodegas.php');
    }

//$sql="INSERT INTO bodega VALUES (NULL ,'$nombre','$direccion','$id_municipio','$id_empresa')";
//$inserccion = mysqli_query($conexion,$sql);

?>


