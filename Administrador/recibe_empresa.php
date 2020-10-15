<?php 
require_once '../Includes/conexion.php';


$editar=false;
$nombre="";
$telefono="";
$correo="";

    $traerid="SELECT id FROM empresa ORDER BY id desc LIMIT 1";
    $result=mysqli_query($conexion,$traerid);
    $trae=mysqli_fetch_array($result);
    $ultimaid=$trae['id'];
    $ultima=$ultimaid+1;

    if(isset($_POST['Guardar'])){   
        extract($_POST);
        $sql1="INSERT INTO empresa VALUES ('$ultima','$nombre','$telefono','$correo')";
        mysqli_query($conexion,$sql1);
        header('location:agregar_empresas.php');
    }

    if(isset($_POST['Editar'])){
        extract($_POST);
        
        $sql2="UPDATE empresa SET empresa='$nombre', telefono='$telefono', correo='$correo' WHERE id='$id'";
        mysqli_query($conexion,$sql2);
        header('location:agregar_empresas.php');
    }
?>