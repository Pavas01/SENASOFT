<?php

//COMPROBAR SI LLEGAN DATOS POST
if (isset($_POST)) {
    //VARIABLES PARA ALMACENAR DATOS QUE LLEGAN POR POST
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $tipo_documento = $_POST['tipo_documento'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //array para errores
    $errores = array();
//validar los datos antes de enviarlos a la base de datos
    //validar nombres

    if (!empty($nombres) && !is_numeric($nombres) && !preg_match("/[0-9]/", $nombres)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        echo $errores["apellidos"] = "Los nombres son invalidos";
    }

    //VALIDAR APELLIDOS

    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $nombres)) {
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        echo $errores["apellidos"] = "Los apellidos son invalidos";
    }

    //VALIDAR TIPO DOCUMENTO

    if (!empty($tipo_documento) && !is_numeric($tipo_documento) && !preg_match("/[0-9]/", $tipo_documento)) {
        $tipo_documento_validado = true;
    } else {
        $tipo_documento_validado_validado = false;
        echo $errores["tipoDocumento"] = "Tipo de documento invalido";
    }

    //VALIDAR DOCUMENTO
    if (!empty($documento) || filter_var($documento, FILTER_VALIDATE_INT)) {

        $documento_validado = true;
    } else {
        $documento_validado = false;
        echo $errores["documento"] = "El documento no es valido";
    }


    //validar email

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        echo $errores["email"] = "El email es invalido";
    }

    //validar USUARIO
    if (!empty($usuario)) {
        $usuario_validado = true;
    } else {
        $usuario_validado = false;
        echo $errores["usuario"] = "El usuario es invalido";
    }

    //validar password
    if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        echo $errores["password"] = "El password es invalido";
    }
    
    
    $guardarUsuario = false;
    
    if (count($errores) == 0){
//        $guardarUsuario = true;
//        //cifrar contraseña
//        $contraseña_segura = password_hash($password, PASSWORD_BCRYPT,['cost'=>4]);
//        
//        //insertar en la base de datos
//        $sql = "INSERT INTO usuarios VALUES(null, '$nombres' , '$apellidos' , '$email' ,'$contraseña_segura' ,curdate());";
//        $guardar = mysqli_query($db, $sql);
        
        if($guardar){
            $_SESSION['completado'] = "el registro se ha completado con exito";
        }else{
           $_SESSION['errores'] ['general'] = "fallo al guardar el registro";
        }
            
    } else {
        $_SESSION["errores"] = $errores;
        
    }
    
   
    header("Location: ../Archivos/registrar.php");
    
}