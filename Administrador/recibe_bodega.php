<?php 

session_start();

extract($_POST);
require_once '../Includes/conexion.php';

$sql="INSERT INTO bodega VALUES (NULL ,'$nombre','$direccion','$id_municipio','$id_empresa')";
$inserccion = mysqli_query($conexion,$sql);

    if($inserccion){
        $_SESSION['realizo']="<strong class='bg-success p-2 rounded text-light'>Se registro Correctamente</strong>";
    }else{
        echo  "<script>alert('Error En El Ingreso'); window.location='agregar_bodegas.php';</script>";
    }
header('location:agregar_bodegas.php');
?>