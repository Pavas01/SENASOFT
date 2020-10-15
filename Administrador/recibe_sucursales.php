<?php require_once '../Includes/conexion.php'; 


$editar=false;
$nombre= "";
$idempresa= "";
$empresa= "";
$telefono= "";
$idmunicipio= "";
$municipio= "";

    if(isset($_POST['Guardar'])){
     extract($_POST);

     $query = mysqli_query($conexion,"INSERT INTO sucursal VALUES (NULL,'$nombre','$empresa','$telefono','$municipio')");
        header('location:agregar_sucursales.php');
    }
    
    if(isset($_POST['Editar'])){
     extract($_POST);
        
        $query = mysqli_query($conexion,"UPDATE sucursal SET nombre='$nombre',id_empresa='$empresa',telefono='$telefono',id_municipio='$municipio' WHERE id=$id");
         header('location:agregar_sucursales.php');
    }
?>
