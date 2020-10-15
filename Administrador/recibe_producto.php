<?php require_once '../Includes/conexion.php';

    $edit=false;
    $id="";
    $nombre="";
    $cantidad="";
    $descripcion="";
    $precio="";
    $peso="";
    $bodega="";
        
 if(isset($_POST['Aceptar'])){
              $nombre=$_POST['nombre'];
              $cantidad=$_POST['cantidad'];
              $descripcion=$_POST['descripcion'];
              $precio=$_POST['precio'];
              $peso=$_POST['peso'];
              $bodega=$_POST['bodega'];
            
            $sqli="INSERT INTO productos VALUES (NULL,'$nombre','$cantidad','$descripcion','$precio','$peso','$bodega','hola')";
            $result=mysqli_query($conexion,$sqli);
     
            header('location:agregar_productos.php');
        } 
    
        if(isset($_POST['Editar'])){
             $id=$_POST['id'];
             $nombre=$_POST['nombre'];
             $cantidad=$_POST['cantidad'];
             $descripcion=$_POST['descripcion'];
             $precio=$_POST['precio'];
             $peso=$_POST['peso'];
             $bodega=$_POST['bodega'];
            
            $sql ="UPDATE productos SET nombre='$nombre', cantidad='$cantidad', descripcion='$descripcion', precio_unidad='$precio', peso='$peso', id_bodega='$bodega' WHERE id=$id";
            $resultado=mysqli_query($conexion,$sql);
            header('location:agregar_productos.php');
        }

   
//    $uploadedfileload="true";
//    $uploadedfile_size=$_FILES['subir_documento']['size'];
//
//    echo $_FILES['subir_documento']['name'];
//    $msg = "";  
//    if ($_FILES['subir_documento']['size']>2000000)
//    {$msg=$msg."El archivo es mayor que 200Mb, debes reduzcirlo antes de subirlo<BR>";
//    $uploadedfileload="false";}
//
//    if (!($_FILES['subir_documento']['type'] =="image/jpeg" OR $_FILES['subir_documento']['type'] =="image/x-icon"          OR $_FILES['subir_documento']['type'] =="image/gif"))
//    {$msg=$msg."Tu archivo tiene que ser pdf, docx, xlsx, zip y pptx . Otros archivos no son permitidos<BR>";
//    $uploadedfileload="false";}
//
//    $file_name=$_FILES['subir_documento']['name'];
//
//    $add="../Docs/$file_name";
//    if($uploadedfileload=="true"){
//
//    if(move_uploaded_file ($_FILES['subir_documento']['tmp_name'], $add)){
//    echo "<script>alert('Ha sido subido satisfactoriamente')</script>;";
//    }else{echo "<script>alert('Error al subir el archivo')</script>;";}
//
//    }else{ echo $msg;}
?>
