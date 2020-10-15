<?php
require_once '../Includes/conexion.php';
extract($_POST);
echo $rol;
echo $id;

$sql = "UPDATE usuarios SET id_rol = '$rol' WHERE id='$id'";
$result = mysqli_query($conexion,$sql);

    if(isset($result)){
        header('location:agregar_rol.php');
    }else{
        header('location:agregar_rol.php');
    }

?>